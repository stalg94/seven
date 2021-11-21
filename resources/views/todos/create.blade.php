@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-3 ">
        <h1 class="text-3xl">What Next You Need To-Do?</h1>
        <a href="{{route('todo.index')}}" class="mx-5 text-4xl text-blue-300 hover:text-blue-100 cursor-pointer text-white ">
            <span class="fas fa-arrow-left"/>
        </a>
    </div>

<x-alert />
<form method="post" action="{{route('todo.store')}}" class="py-5">
    @csrf
    <div class="py-1">
        <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title">
    </div>
   <div class="py-2">
       <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
   </div>

    <div class="py-1">
        <livewire:step />
    </div>
    {{--        <input type="submit" value="Create" >--}}
    <div class="py-1">
        <button style="cursor: pointer" type="submit" value="Create" class=" py-2 border rounded">Create</button>
    </div>
</form>


@endsection
