<?php

namespace App\DataTables\Admin;

use App\Helper\Util;
use App\Models\Answer;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

/**
 * Class AnswerDataTable
 * @package App\DataTables\Admin
 */
class AnswerDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        $dataTable->editColumn('question_id', function (Answer $model) {
            return $model->question['question'];
        });

        $dataTable->rawColumns(['question_id', 'action']);

        return $dataTable->addColumn('action', 'admin.answers.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Answer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Answer $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('answers.create') || \Entrust::hasRole('super-admin')) {
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
            'question_id' => ['title' => 'Question'],
            'answer'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'answersdatatable_' . time();
    }
}