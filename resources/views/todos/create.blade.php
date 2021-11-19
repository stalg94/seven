@extends('todos.layout')

@section('content')
<h1 class="text2x1">What next you need to do?</h1>
<x-alert />
<form method="post" action="/todos/create" class="py-5 ">
    @csrf
    <input type="text" name="title" class="py-2 px-2 border rounded">
    {{--        <input type="submit" value="Create" >--}}
    <button style="cursor: pointer" type="submit" value="Create" class=" py-2 border rounded">Create</button>
</form>

@endsection
