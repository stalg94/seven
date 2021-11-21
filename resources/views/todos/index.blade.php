@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-3 ">
        <h1 class="text-3xl">All Your ToDos</h1>
        <a href="{{route('todo.create')}}" class="mx-5 text-4xl text-blue-300  hover:text-blue-100 cursor-pointer text-white ">
            <span class="fas fa-plus-circle"/>
        </a>
    </div>

<ul class="my-5">
    <x-alert />
    @forelse( $todos as $todo)
        <li class="flex justify-between py-2 px-2">
            <div>
                @include('todos.complete-button')
            </div>
            @if($todo->completed)
                <p class="line-through">{{$todo->title}}</p>
            @else
                <p>{{$todo->title}}</p>
                @endif

            <div>
                <a href="{{route('todo.edit',$todo->id)}}" class="mx-5 py-1 py-1 text-yellow-400 hover:text-yellow-100 w-16 cursor-pointer text-white ">
                    <span class="fas fa-edit px-2"/>
                </a>

                <span class="fas fa-trash px-2 cursor-pointer text-red-400 hover:text-red-100 w-16"
                      onclick="event.preventDefault();
                      if(confirm('Are you really want to delete?')){
                          document.getElementById('form-delete-{{$todo->id}}').submit()
                          }"/>
                <form style="display: none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.destroy', $todo->id)}}">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </li>

    @empty
        <p>No task available, create one.</p>

    @endforelse
</ul>

@endsection


