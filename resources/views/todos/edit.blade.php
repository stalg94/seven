@extends('todos.layout')


@section('content')
    <h1 class="text2xl border-b pb-4">Update ths todo list:</h1>
{{--    <h2>{{$todo->title}}</h2>--}}
    <x-alert />
    <form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5 ">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded">
        {{--        <input type="submit" value="Create" >--}}
        <button style="cursor: pointer" type="submit" value="Update" class=" py-2 border rounded">Update</button>
    </form>

    <a href="/todos" class="m-5 py-1 py-1 bg-white-400 hover:bg-blue-300 cursor-pointer border rounded">Back</a>
@endsection
