@extends('todos.layout')

@section('content')
<h1 class="text2xl border-b pb-4">What next you need to do?</h1>
<x-alert />
<form method="post" action="{{route('todo.store')}}" class="py-5 ">
    @csrf
    <input type="text" name="title" class="py-2 px-2 border rounded">
    {{--        <input type="submit" value="Create" >--}}
    <button style="cursor: pointer" type="submit" value="Create" class=" py-2 border rounded">Create</button>
</form>

    <a href="{{route('todo.index')}}" class="m-5 py-1 py-1 bg-white-400 hover:bg-blue-300 cursor-pointer border rounded">Back</a>


@endsection
