@extends('layouts.app')
    @section('content')
        <div class="container" style="margin-top: 60px;">
            <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Brawo!</strong><p>Zalogowałeś się do CRUDA</p>
            </div>
        </div>
        <h3 style="text-align:center;">All Of Tasks</h3>
        <hr>
        <h3 style="text-align:center;">
            <a href="{{'crud/create'}}">
                <button class="btn btn-info">+&nbsp;new task</button>
            </a>
        </h3>
        <br>
            <table class="table table-hover" style="font-size: 15px;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>DATE</th>
                    <th>TITLE</th>
                    <th>BODY</th>
                    <th>OPTIONS</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($crud as $tasks)
                    <tr>
                        <td>{{ $tasks->id }}</td>
                        <td>{{ $tasks->created_at }}</td>
                        <td>{{ $tasks->title }}</td>
                        <td>{{ $tasks->body }}</td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="#">SHOW</a>
                            <a class="btn btn-warning btn-xs" href="{{ route('crud.edit', $tasks)}}">EDIT</a>&nbsp;
                            {!! Form::model($tasks, ['route' =>['crud.delete', $tasks], 'method' => 'DELETE']) !!}
                                <button class="btn btn-danger btn-xs">DELETE</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    @endsection