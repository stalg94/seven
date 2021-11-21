@extends('todos.layout')


@section('content')
    <div class="flex justify-between border-b pb-4 px-3 ">
        <h1 class="text-3xl">Update this To-Do List</h1>
        <a href="{{route('todo.index')}}" class="mx-5 text-4xl text-blue-300  hover:text-blue-100 cursor-pointer text-white ">
            <span class="fas fa-arrow-left"/>
        </a>
    </div>

{{--    <h2>{{$todo->title}}</h2>--}}
    <x-alert />
    <form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5 ">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded">
        {{--        <input type="submit" value="Create" >--}}
        <button style="cursor: pointer" type="submit" value="Update" class=" py-2 border rounded">Update</button>
    </form>

{{--   <a href="{{route('todo.index')}}" class="m-5 py-1 py-1 bg-white-400 hover:bg-blue-300 cursor-pointer border rounded">Back</a>--}}
@endsection
