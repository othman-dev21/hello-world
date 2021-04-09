@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($categories as $category)


        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/'.$category->image) }}" alt="iamge">
            <div class="card-body">
                <h5 class="card-title">{{ $category->title }}</h5>
                Created By: <b>{{ $category->user->name }}</b><br />
                <p class="card-text"></p>
                Created At: {{ $category->created_at->diffForHumans() }}
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>



















        <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title"><h3>{{ $category->title }}</h3></div>
            <div class="card-text">
                Created By: <b>{{ $category->user->name }}</b><br />
                Created At: {{ $category->created_at->diffForHumans() }}
            </div>

            <img src="{{ asset('storage/'.$category->image) }}" style="width:100px" alt="">


        </div>
    </div> -->
        @endforeach
    </div>
</div>
@endsection