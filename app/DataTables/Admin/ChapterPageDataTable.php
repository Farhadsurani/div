<?php

namespace App\DataTables\Admin;

use App\Helper\Util;
use App\Models\Chapter;
use App\Models\ChapterPage;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use function foo\func;

/**
 * Class ChapterPageDataTable
 * @package App\DataTables\Admin
 */
class ChapterPageDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public $chapter_id = null;

    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        $dataTable->editColumn('chapter_id', function ($chapter) {
            return $chapter->chapter->name;
        });

        return $dataTable->addColumn('action', 'admin.chapter_pages.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ChapterPage $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ChapterPage $model)
    {

        $query = $model->newQuery();
        if (!is_null($this->chapter_id)) {
            $query->where('chapter_id', $this->chapter_id);
        }
        return $query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('chapter-pages.create') || \Entrust::hasRole('super-admin')) {
            $buttons = ['create'];
        }
        $buttons = array_merge($buttons, [
            'export',
            'print',
            'reset',
            'reload',
        ]);
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px', 'printable' => false])
            ->parameters(array_merge(Util::getDataTableParams(), [
                'dom'     => 'Blfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => $buttons,
            ]));
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'chapter_id' => [
                'title' => 'Chapter Name'
            ],
            'number',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'chapter_pagesdatatable_' . time();
    }
}