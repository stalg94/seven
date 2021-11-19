@extends('todos.layout')

@section('content')
<h1 class="text2x1">All Your To Dos</h1>
<ul>
    @foreach( $todos as $todo)
        <li>
            {{$todo->title}}
        </li>
    @endforeach
</ul>

@endsection


