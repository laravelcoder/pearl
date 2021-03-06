@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Design
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($design, ['route' => ['designs.update', $design->id], 'method' => 'patch','enctype'=>"multipart/form-data"]) !!}

                        @include('designs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection