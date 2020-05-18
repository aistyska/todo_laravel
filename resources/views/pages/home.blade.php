@extends('main')

@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="card px-3">
                    <div class="card-body">
                        <h3 class="card-title">Awesome Todo list</h3>
                        <div class="add-items d-flex">
                            <h5>Have something to do?</h5> <a role="button" href="/add-task" class="btn btn-primary">Add Task</a> </div>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list">
                             @foreach($tasks as $task)
                                 <li @if($task->status == '1') class="completed" @endif>
                                     <div>
                                         <a href="/status-update/{{$task->id}}" class="text-decoration-none text-info font-weight-bold">@if($task->status == '1') <i class="fas fa-square"></i> @else <i class="far fa-square"></i> @endif {{ $task->title }} <i class="input-helper"></i></a>
                                         <p class="m-1 font-italic">{{ $task->description }}</p>
                                     </div>
                                     <div class="ml-auto">
                                         <a href="/edit-task/{{ $task->id }}"><i class="fas fa-edit"></i></a>
                                         <a class="ml-1" href="/delete-task/{{ $task->id }}"><i class="far fa-trash-alt"></i></a>
                                     </div>
                                 </li>
                             @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
