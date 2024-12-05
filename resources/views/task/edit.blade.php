@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit task</h4>
                    <a href="{{url('task/create')}}" class="btn btn-primary float-end">Add new task</a>
                </div>
                <div class="card-body">
                    <form action="{{route('task.update', $task->id)}}" method="POST">
                        @csrf

                        @method('PUT')
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" value="{{$task->title}}" name="title" class="form-control">
                            @error('title')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control">{{!!$task->description!!}}</textarea>
                            @error('title') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0" id="pending" checked>
                                <label class="form-check-label" for="pending">
                                  Pending
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="3" id="completed" >
                                <label class="form-check-label" for="completed">
                                  Completed
                                </label>
                              </div>
                              @error('title') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection