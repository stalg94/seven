@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-3 ">
        <h1 class="text-3xl">All Your ToDos</h1>
        <a href="/todos/create" class="mx-5 text-4xl text-blue-300  hover:text-blue-100 cursor-pointer text-white ">
            <span class="fas fa-plus-circle"/>
        </a>
    </div>

<ul class="my-5">
    <x-alert />
    @foreach( $todos as $todo)
        <li class="flex justify-between py-2 px-2">
            @if($todo->completed)
                <p class="line-through">{{$todo->title}}</p>
            @else
                <p>{{$todo->title}}</p>
                @endif

            <div>
                <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-5 py-1 py-1 text-red-400 hover:text-red-100 w-16 cursor-pointer text-white "><span class="fas fa-edit px-2"/></a>
                @if($todo->completed)
                    <span onclick="event.preventDefault();
                        document.getElementById('{{'form-incomplete-'.$todo->id}}').submit()"
                        class="fas fa-check px-2 text-green-400 cursor-pointer"/>
                    <form style="display: none" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete', $todo->id)}}">
                        @csrf
                        @method('delete')
                    </form>
                @else
                    <span onclick="event.preventDefault();
                        document.getElementById('form-complete-{{$todo->id}}').submit()"
                          class="fas fa-check px-2 text-gray-300 cursor-pointer"/>
                    <form style="display: none" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete', $todo->id)}}">
                        @csrf
                        @method('put')
                    </form>
                @endif
            </div>
        </li>
    @endforeach
</ul>

@endsection


