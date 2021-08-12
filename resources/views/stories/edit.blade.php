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
                        <div class="mb-3">
                            <label for="txtTitle" class="form-label">Story Title</label>
                            <input type="text" name="title" class="form-control @error('title')is-invalid @enderror"
                                id="txtTitle" placeholder="Story Title" value="{{ old('title',$story->title) }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="taBody" class="form-label">Body</label>
                            <textarea class="form-control @error('body')is-invalid @enderror" name=" body" id="taBody"
                                rows="3">{{ old('body',$story->body) }}</textarea>
                            @error('body')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slType" class="form-label">Type</label>
                            <select name="type" class="form-select form-control @error('type') is-invalid @enderror">
                                <option selected disabled>-- Select Type --</option>
                                <option value="short" {{ 'short' == old('type',$story->type)? 'selected':'' }}>Short
                                </option>
                                <option value="long" {{ 'long' == old('type',$story->type)? 'selected':'' }}>Long
                                </option>
                            </select>
                            @error('type')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <legend>
                                <h6>Status</h6>
                            </legend>
                            <div
                                class="custom-control custom-radio custom-control-inline @error('status') is-invalid @enderror">
                                <input class="custom-control-input" type="radio" name="status" id="rd1" value="1"
                                    {{ '1' == old('status',$story->status)? 'checked':'' }}>
                                <label class="custom-control-label" for="rd1">
                                    Yes
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="status" id="rd2" value="0"
                                    {{ '0' == old('status',$story->status)? 'checked':'' }}>
                                <label class="custom-control-label" for="rd2">
                                    No
                                </label>
                            </div>
                            @error('status')
                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                            @enderror
                        </div>
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