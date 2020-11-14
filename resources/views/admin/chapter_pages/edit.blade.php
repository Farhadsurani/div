@extends('admin.layouts.app')

@section('title')
    {{ $chapterPage->name }} <small>{{ $title }}</small>
@endsection

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($chapterPage, ['route' => ['admin.chapter-pages.update', $chapterPage->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.chapter_pages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection