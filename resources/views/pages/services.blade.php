@extends('layouts.master')
@section('content')
<h1>{{$title}}</h1>
@if(count($services)>0)
    <ul>
        @foreach($services as $myservice)
            <li>{{$myservice}}</li>
        @endforeach
    </ul>
@endif
<p></p>
@endsection