<?php

namespace App\DataTables\Admin;

use App\Helper\Util;
use App\Models\News;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

/**
 * Class NewsDataTable
 * @package App\DataTables\Admin
 */
class NewsDataTable extends DataTable
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
        
          $dataTable->editColumn('image', function (News $model) {
            if ($model->image)
                return '<a href="' . asset("storage/app/".$model->image). '" class="group1" onclick="openPopup()"> <img alt="" src="' . asset("storage/app/".$model->image). '" style="height:50px;width:50px; cursor: zoom-in !important; ;" id="myImg" class="" /> </a>';
            else
                return 'No Image Found';
        });

        $dataTable->rawColumns(['image','action']);


        return $dataTable->addColumn('action', 'admin.news.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\News $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(News $model)
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
        if (\Entrust::can('news.create') || \Entrust::hasRole('super-admin')) {
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
            'author',
            'title',
            'description',
            'image'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'newsdatatable_' . time();
    }
}