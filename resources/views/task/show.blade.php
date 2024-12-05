@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Show Task Detail</h4>
                    <a href="{{url('task')}}" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <p>
                                {{$task->title}}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <p>{{!!$task->description!!}}</p>
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                             <p>{{$task->status == 1 ? 'checked': ''}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection