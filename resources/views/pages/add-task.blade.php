@extends('main')

@section('content')
<div class="row justify-content-center padding">
    <div class="card px-3 col">
        <div class="card-body">
            <h3 class="card-title">Add New Task</h3>
            <form method="post" action="/store-task">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="task">Task</label>
                    <input type="text" class="form-control todo-list-input" id="task" name="title" placeholder="What do you need to do?">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Task status</label>
                    <select class="custom-select" id="status" name="status">
                        <option value="0">New</option>
                        <option value="1">Done</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Task</button>
                <a role="button" href="/" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>



@endsection
