@extends('layouts.app', ['title' => 'Write'])

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Tell your story matte
                </div>
                <div class="card-body">
                    <form action="{{ route('write.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" name="ur_story" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px"></textarea>
                            <label for="floatingTextarea">Your Story</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Your Story Table
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Your Story</th>
                            <th scope="col">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($writes as $index => $write)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $write->title }}</td>
                                    <td>{{ $write->author }}</td>
                                    <td>{{ $write->ur_story }}</td>
                                    <td>{{ $write->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection