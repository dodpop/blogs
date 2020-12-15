@extends('layout.mainlayout')
@section('content')

@if(Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
@endif
     
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Action</th>
            </tr>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td><a href="/tasks/{{$task->id}}" class="btn">{{$task->title}}</a></td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->created_at->toFormattedDateString()}}</td>
                    <td>{{$task->updated_at->format('M d Y')}}</td>
                    <td>
                        <div>
                            <a href="/tasks/{{$task->id}}/edit" class="btn btn-warning">edit</a>
                            <form action="{{url('tasks', [$task->id])}}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" class="btn btn-danger" value="delete">
                            </form>
                        </div>
                    </td>
                        
                </tr>

                @endforeach
                
            </tbody>
            

        </thead>

    </table>

@endsection