@extends('admin.layouts.app')

@section('title')
    {{ $subscription->name }} <small>{{ $title }}</small>
@endsection

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($subscription, ['route' => ['admin.subscriptions.update', $subscription->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.subscriptions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection