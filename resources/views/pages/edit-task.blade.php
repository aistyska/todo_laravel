@extends('main')

@section('content')
    <div class="card border-secondary px-4 pb-4 my-5">
        <div class="card-body">
            <h4 class="card-title">Add New Task</h4>
            <form method="post" action="/store-update/{{$task->id}}">
                {{csrf_field()}}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="task">Task</label>
                    <input type="text" class="form-control todo-list-input" id="task" name="title" value="{{ $task->title }}" placeholder="What do you need to do?">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Task status</label>
                    <select class="custom-select" id="status" name="status">
                        <option value="0" @if($task->status == '0')selected @endif>New</option>
                        <option value="1" @if($task->status == '1')selected @endif>Done</option>
                    </select>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a role="button" href="/" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
@endsection
