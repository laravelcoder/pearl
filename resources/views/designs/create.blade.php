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
                    {!! Form::open(['route' => 'designs.store']) !!}

                        @include('designs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @if($app->environment('local'))
        <script>
            if (window.console && window.console.log) {
                console.log("%c CREATE.blade.php", 'background: #222; color:yellow', "loaded");
            }
        </script>
    @endif

@endsection
