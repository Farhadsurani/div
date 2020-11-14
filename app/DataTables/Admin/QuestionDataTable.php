<?php

namespace App\DataTables\Admin;

use App\Helper\Util;
use App\Models\Question;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

/**
 * Class QuestionDataTable
 * @package App\DataTables\Admin
 */
class QuestionDataTable extends DataTable
{
    public $chapterPage = null;

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        $dataTable->editColumn('chapter_id', function (Question $model) {
           return $model->chapter['name'];
        });

//        $dataTable->editColumn('question_id', function (Question $model) {
//            return $model->answer['answer'];
//        });

        $dataTable->rawColumns(['chapter_id', 'action']);


        return $dataTable->addColumn('action', 'admin.questions.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Question $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Question $model)
    {
        $query = $model->newQuery();
        if (!is_null($this->chapterPage)) {
            $query->where('chapter_id', $this->chapterPage);
        }
        return $query;
//        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $buttons = [];
        if (\Entrust::can('questions.create') || \Entrust::hasRole('super-admin')) {
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
            'chapter_id' => ['title' => 'Chapter'],
            'question'
//            'question_id'=> ['title' => 'Answer']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'questionsdatatable_' . time();
    }
}