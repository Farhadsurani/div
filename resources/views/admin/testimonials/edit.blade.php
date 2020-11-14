@extends('admin.layouts.app')

@section('title')
    {{ $testimonial->name }} <small>{{ $title }}</small>
@endsection

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($testimonial, ['route' => ['admin.testimonials.update', $testimonial->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('admin.testimonials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection