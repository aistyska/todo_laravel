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
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> For what reason would it be advisable. <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                    <a href="/edit-task"><i class="fas fa-edit"></i></a>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked=""> For what reason would it be advisable for me to think. <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                    <a href="/edit-task"><i class="fas fa-edit"></i></a>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> it be advisable for me to think about business content? <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                    <a href="/edit-task"><i class="fas fa-edit"></i></a>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Print Statements all <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                    <a href="/edit-task"><i class="fas fa-edit"></i></a>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked=""> Call Rampbo <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                    <a href="/edit-task"><i class="fas fa-edit"></i></a>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Print bills <i class="input-helper"></i>
                                        </label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                    <a href="/edit-task"><i class="fas fa-edit"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
