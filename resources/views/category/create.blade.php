@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" />
                    </div>

                    <div class="card-body">
                        <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection