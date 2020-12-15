@extends('layout.mainlayout')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <h1>Task Detail {{$task->title}}</h1>
        <div class="container">
            <p>
                <strong>Task Title: {{$task->title}}</strong><br>
                <strong>Task Description: {{$task->description}}</strong>
            </p>
        </div>
    </div>
@endsection