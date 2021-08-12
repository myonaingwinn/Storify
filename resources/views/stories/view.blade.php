@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="font-weight-bold">{{$story->title}}</span>
                    <a href="{{ route('stories.index') }}" class="btn btn-primary btn-sm float-right">Back</a></div>
                <div class="card-body">
                    {{$story->body}}
                    <hr class="my-4">
                    Status : {{ $story->status==1?'Yes':'No' }}
                    <hr class="my-3">
                    Type : <span class="text-capitalize">{{ $story->type }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection