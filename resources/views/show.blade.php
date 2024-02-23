@extends('layouts.app')

@section('title', $task->title)

@section('content')
  <p class="border border-primary">{{ $task->description }}</p>

  @if ($task->long_description)
    <p class="border border-info">{{ $task->long_description }}</p>
  @endif

  <p>Created at: {{ $task->created_at }}</p>
  <p>Updated at: {{ $task->updated_at }}</p>

  <div class="input-group mb-3">
    <span class="input-group-text bg-primary-subtle" id="basic-addon1">Status</span>
    <input type="text" class="form-control  bg-primary text-white" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled
    value=" 
    @if ($task->completed)
      Completed
    @else
      Not Completed
    @endif">
  </div>

  <div class="row">
    <div class="col-4">
      <a href="{{ route('tasks.edit', ['task' => $task] ) }}" class="btn btn-warning">Edit</a>
    </div>

    <div class="col-4">
      <form method="post" action="{{ route('tasks.toggle-complete', ['task' => $task] ) }}">
        @csrf
        @method('PUT')

        <button type="submit" class="btn btn-success">
          Mark as {{ $task->completed ? 'not completed' : 'completed' }}
        </button>
      </form>
    </div>

    <div class="col-4">
      <form action="{{ route('tasks.destroy', ['task'=> $task->id] ) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
      </form>

  </div>

  <div>

  <div class="row mt-3">
    <a href="{{ route('tasks.index') }}" class="btn btn-info col-4">🔙</a>
  </div>
@endsection