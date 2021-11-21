@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-3 ">
        <h1 class="text-3xl">{{$todo->title}}</h1>
        <a href="{{route('todo.index')}}" class="mx-5 text-4xl text-blue-300  hover:text-blue-100 cursor-pointer text-white ">
            <span class="fas fa-arrow-left"/>
        </a>
    </div>
    <div>
        <div>
            <p>{{$todo->description}}</p>
        </div>
    </div>





@endsection
