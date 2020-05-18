@extends('main')

@section('content')
<div class="row justify-content-center padding">
    <div class="card px-3 col">
        <div class="card-body">
            <h4>Add New Task</h4>
            <form method="post" action="/store-task">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="task">Task</label>
                    <input type="text" class="form-control todo-list-input" id="task" name="title" value="{{ old('title') }}" placeholder="What do you need to do?">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description"  rows="3"> {{ old('description') }} </textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Task status</label>
                    <select class="custom-select" id="status" name="status">
                        <option value="0" @if(old('status') == '0')selected @endif>New</option>
                        <option value="1" @if(old('status') == '1')selected @endif>Done</option>
                    </select>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Task</button>
                <a role="button" href="/" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>



@endsection
