@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="font-weight-bold">{{ __('Stories') }}</span>
                    <a href="{{ route('stories.create') }}" class="btn btn-success btn-sm float-right">New Story</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stories as $story)
                            <tr>
                                <td>{{$story->title}}</td>
                                <td class="text-capitalize">{{$story->type}}</td>
                                <td>{{$story->status==1?'Yes':'No'}}</td>
                                <td><a href="{{ route('stories.show', [$story]) }}"
                                        class="btn btn-secondary btn-sm">View</a>
                                    <a href="{{ route('stories.edit', [$story]) }}"
                                        class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('stories.destroy',[$story]) }}" method="post"
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $stories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection