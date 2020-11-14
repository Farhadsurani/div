@extends('admin.layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <dl class="dl-horizontal">
                        @include('admin.chapter_pages.show_fields')
                    </dl>
                    {!! Form::open(['route' => ['admin.chapter-pages.destroy', $chapterPage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @ability('super-admin' ,'chapter-pages.show')
                        <a href="{!! route('admin.chapter-pages.index') !!}" class="btn btn-default">
                            <i class="glyphicon glyphicon-arrow-left"></i> Back
                        </a>
                        @endability
                    </div>
                    <div class='btn-group'>
                        @ability('super-admin' ,'chapter-pages.edit')
                        <a href="{{ route('admin.chapter-pages.edit', $chapterPage->id) }}" class='btn btn-default'>
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                        @endability
                    </div>
                    <div class='btn-group'>
                        @ability('super-admin' ,'chapter-pages.destroy')
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', [
                            'type' => 'submit',
                            'class' => 'btn btn-danger',
                            'onclick' => "confirmDelete($(this).parents('form')[0]); return false;"
                        ]) !!}
                        @endability
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h2 class="box-title">Add Questions</h2>
            </div>
            <div class="box-body">
                <div class="row datatable-action-urls"
                     data-action-create="{{route('admin.questions.create',['chapterPage'=>$chapterPage->id])}}">
                    <div class="col-sm-12">
                        @include('admin.questions.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection