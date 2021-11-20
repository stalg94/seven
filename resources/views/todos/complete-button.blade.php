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
