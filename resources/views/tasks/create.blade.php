@extends('layout.mainlayout')
@section('content')
    <h1>Add New Task</h1>
    <hr>
    <form action="{{url('tasks')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="tasktitle">Task Title</label>
            <input type="text" class="form-control" id="tasktitle" name="title">       
        </div>
        <div class="form-group">
            <label for="taskdescription">Task Description</label>
            <input type="text" class="form-control" id="taskdescription" name="description">  
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
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection