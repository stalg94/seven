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
            <h3 class="text-lg font-bold">Description</h3>
            <p class="text-lg">{{$todo->description}}</p>
        </div>
        @if($todo->steps->count() >0)
            <h3 class="text-lg font-bold">Step for this task:</h3>
            @foreach($todo->steps as $step)
                <div class="py-2">

                    <p>{{$step->name}}</p>
                </div>
                @endforeach
            @endif
    </div>





@endsection
