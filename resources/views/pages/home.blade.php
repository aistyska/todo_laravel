@extends('main')

@section('content')
    <div class="card border-secondary px-sm-4 pb-sm-4 my-5">
        <div class="card-body">
            <h3 class="card-title">Todo List</h3>
            <h4 class="card-subtitle mb-2 d-sm-inline-block">Have something to do?</h4>
            <a role="button" href="/add-task" class="btn btn-primary ml-sm-1">Add Task</a>
        </div>
        <ul class="list-group list-group-flush d-flex flex-column-reverse">
            @foreach($tasks as $task)
            <li class="list-group-item d-flex justify-content-between">
                <div  @if($task->status == '1') class="completed" @endif>
                    <a href="/status-update/{{$task->id}}" class="text-decoration-none text-info font-weight-bold"> @if($task->status == '1') <i class="fas fa-square"></i> @else <i class="far fa-square"></i> @endif {{ $task->title }}</a>
                    <p class="m-1 font-italic">{{ $task->description }}</p>
                </div>
                <div class="align-self-center text-nowrap">
                    <a class="text-info" href="/edit-task/{{ $task->id }}"><i class="fas fa-edit"></i></a>
                    <a class="ml-1 text-info" href="/delete-task/{{ $task->id }}"><i class="far fa-trash-alt"></i></a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
