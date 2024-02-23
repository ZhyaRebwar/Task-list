@extends('layouts.app')

@section('title', 'List of all tasks')

@section('content')
  <div>
    <a href="{{ route('tasks.create') }}" class="btn btn-outline-primary mt-2 mb-2 p-2 col-12">Add Task</a>
  </div>

@forelse ($tasks as $task)
      <ol class="list-group">
        <li class="list-group-item mt-1"> 
          <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
          @class([ "text-dark", "text-decoration-none", "text-decoration-line-through" => $task->completed ])
          >{{ $task->title }}</a>

        </li>
      </ol>
    @empty
      <div class="text-danger">There are no tasks!</div>
    @endforelse
    

    @if ($tasks->count() )
      <nav class="mt-3">
      {{ $tasks->links() }}
      </nav>
    @endif
    
@endsection