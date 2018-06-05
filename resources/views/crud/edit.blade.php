@extends('layouts.app')
@section('content')
    <h3 style="text-align:center;">Edit Your Task</h3>
    <hr><br>
    <div class="col-lg-4 col-md-offset-4">

        {!! Form::model($crud, ['route' => ['crud.update', $crud], 'method'=>'PUT']) !!}

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
                <div class="btn btn-danger">{{ $blad }}</div>
            @endforeach

        @endif


        {!! Form::close() !!}

    </div>
@endsection