@extends('layout.mainlayout')
@section('content')
    <div class="container ">
        <h1>Edit Task: {{$task->title}}</h1>
        <div class="jumbotron">
            <form action="{{url('tasks',[$task->id])}}"  method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Task Title</label>
                    <input type="text" value="{{$task->title}}" class="form-control" id="tasktitle" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Task Description</label>
                    <input type="text" value="{{$task->description}}" class="form-control" id="taskdescription" name="description">
                </div>

                <div class="form-group">
                    <input type="submit" value="save" class="btn btn-primary" >
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{$errors}}</li>   
                            @endforeach
                        </ul>
                    </div>
                @endif
             
            </form>
               
            </p>
        </div>
    </div>
@endsection