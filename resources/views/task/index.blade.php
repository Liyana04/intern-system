@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @session('status')
            <div class="alert a;ert-success">
                {{session('status')}}
                </div>                
            @endsession
            <div class="card">
                <div class="card-header">
                    <h4>Task List</h4>
                    <a href="{{url('task/create')}}" class="btn btn-primary float-end">Add new task</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->status == 1? 'Pending':'Approved'}}</td>
                                <td>
                                    <a href="{{route('task.edit', $task->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('task.show', $task->id)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('task.destroy', $task->id)}}" class="btn btn-danger">Delete</a>
                                    <form action="{{route('task.destroy', $task->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$tasks->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection