@extends('admin.layouts.app')

@section('title')
    {{ $answer->name }} <small>{{ $title }}</small>
@endsection

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($answer, ['route' => ['admin.answers.update', $answer->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.answers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection