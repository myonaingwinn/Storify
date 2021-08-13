@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="font-weight-bold">{{ __('Update Story')}}</span>
                    <a href="{{ route('stories.index') }}" class="btn btn-primary btn-sm float-right">Back</a></div>
                <div class="card-body">
                    <form action="{{ route('stories.update',[$story]) }}" method="post">
                        @csrf
                        @method('PUT')
                        
                        @include('stories.form');

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection