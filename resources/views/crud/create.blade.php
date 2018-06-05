@extends('layouts.app')
@section('content')
    <h3 style="text-align:center;">Create a New Task</h3>
    <hr><br>
    <div class="col-lg-6 col-md-offset-3">

        {!! Form::open(['route' => 'crud.store']) !!}

        <div class="form-group">
            {!! Form::label('title', "Title:") !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', "Treść:") !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Zapisz', ['class' => 'btn btn-primary']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-info'] ) !!}
        </div>

        @if($errors->any())

            @foreach($errors->all() as $blad)
                <div class="alert alert-danger" role="alert">
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                    {{ $blad }}
                </div>
            @endforeach

        @endif

        {!! Form::close() !!}

    </div>
@endsection