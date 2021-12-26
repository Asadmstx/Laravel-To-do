@extends('layout.app') <!-- connection to app.blade.php -->

@section('tab-title') ToDo list @endsection <!-- tab-title -->

@section('content') <!-- section content -->
    <h1 class="text-center mb-5">Todo list</h1>
        <div class="row">
            <div class="col-lg-6">
                <h4 class="bg-dark text-light mb-0 p-2">Add your tasks</h4>
                <form action="{{ route('user-add') }}" method="post" class="form-control">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="task" class="form-control" placeholder="example: do homework" id="task">
                        <button type="submit" class="input-group-text">
                            <i class="bi bi-arrow-right-square-fill"></i>
                        </button>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="bg-dark text-light mb-0 p-2 text-lg-end">Current tasks</h4>
                <div class="bg-light text-dark">
                    <ul class="mb-0">
                        @foreach($data as $el)
                            <li>
                                <div class="d-flex align-items-center justify-content-between border-bottom p-2">
                                    <p class="mb-0">{{ $el->task }}</p>
                                    <a href="{{route('task-delete', $el->id)}}" class="btn btn-light p-0 text-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <p class="mt-lg-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, odio cupiditate sequi nesciunt fugiat ullam officia totam quos, aliquid quaerat fugit omnis optio esse amet veritatis? Cum beatae repellendus dicta hic, modi nostrum dolorum temporibus exercitationem, laboriosam mollitia quod maxime ipsa consequatur accusamus ipsum eveniet ex distinctio, non consectetur soluta. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, obcaecati. Voluptas impedit iste quos iusto laborum reprehenderit ad consequatur vitae dolore? Tempore deserunt hic nemo totam, aliquid placeat magnam, accusamus eius vero laboriosam doloribus reiciendis? Quas unde nisi sed aperiam, inventore, quaerat culpa corporis praesentium veniam quisquam quo quod natus.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum beatae praesentium reprehenderit earum exercitationem animi, voluptatibus expedita veniam pariatur debitis rerum autem at ipsa dolore ut rem quas libero ex nesciunt eveniet magnam. Eum velit hic, id quisquam magni, quia quasi sequi inventore ex non ratione rem iure voluptatum adipisci.</p>
@endsection