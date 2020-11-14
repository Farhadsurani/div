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
                        @include('admin.courses.show_fields')
                    </dl>
                    {!! Form::open(['route' => ['admin.courses.destroy', $course->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @ability('super-admin' ,'courses.show')
                        <a href="{!! route('admin.courses.index') !!}" class="btn btn-default">
                            <i class="glyphicon glyphicon-arrow-left"></i> Back
                        </a>
                        @endability
                    </div>
                    <div class='btn-group'>
                        @ability('super-admin' ,'courses.edit')
                        <a href="{{ route('admin.courses.edit', $course->id) }}" class='btn btn-default'>
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </a>
                        @endability
                    </div>
                    <div class='btn-group'>
                        @ability('super-admin' ,'courses.destroy')
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
                <h2 class="box-title">Add Chapters</h2>
            </div>
            <div class="box-body">
                <div class="row datatable-action-urls"
                     data-action-create="{{route('admin.chapters.create',['course_id'=>$course->id])}}">
                    <div class="col-sm-12">
                        @include('admin.chapters.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection