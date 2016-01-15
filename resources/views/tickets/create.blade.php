@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 cold-md-offset-2">
                <h2>Formulario aqui</h2>

                {!! Form::open(['route' => 'tickets.store', 'method' => 'POST']) !!}
                    <p>
                        <button type="submit" class="btn btn-primary">
                            Enviar Solicitud
                        </button>
                    </p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection