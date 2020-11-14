@extends('admin.layouts.app')

@section('title')
    {{ $event->name }} <small>{{ $title }}</small>
@endsection

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($event, ['route' => ['admin.events.update', $event->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.events.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection