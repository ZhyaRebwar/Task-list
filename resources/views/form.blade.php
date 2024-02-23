@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')

    <style>
        .error-message{
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" class="mt-2">
        @csrf 
        @isset($task)
            @method('PUT')
        @endisset
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Title</span>
            <input type="text" class="form-control" name="title" value="{{ $task->title ?? old('title') }}" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        @error('title')
            <p class="error-message border border-success">{{ $message }}</p>
        @enderror

        <div class="input-group mb-3">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" name="description" aria-label="With textarea" rows="5">
                {{ $task->description ?? old('description') }}
            </textarea>
        </div>
        @error('description')
            <p class="error-message border border-success">{{ $message }}</p>
        @enderror


        <div class="input-group mb-3">
            <span class="input-group-text">Long Description</span>
            <textarea class="form-control" name="long_description" aria-label="With textarea" rows="10">
                {{ $task->long_description ?? old('long_description') }}
            </textarea>
        </div>
        @error('long_description')
            <p class="error-message border border-success">{{ $message }}</p>
        @enderror
            

        <button type="submit" class="btn btn-success">
            @isset($task)
                Update Task
            @else
                Add Task
            @endisset
        </button>

        <a href="{{ route('tasks.index') }}" class="btn btn-danger">Cancel</a>
    </form>
@endsection