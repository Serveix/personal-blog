@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#posts').DataTable();
        });
    </script>
@endsection

@section('content')
    @include('includes.header', [
        'type' => 'site',
        'heading' => 'Admin Site',
        'subheading' => env('APP_NAME'),
        'img' => asset('img/contact-bg.jpg')
    ])
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <h1>Todos los post</h1>
            </div>
            <div class="col-md-5 text-right">
                <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">
                    Nuevo post
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table id="posts" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>HEADING</th>
                        <th>SUBHEADING</th>
                        <th>PUBLISHED</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->header }}</td>
                            <td>{{ $post->subheader }}</td>
                            <td>{{ $post->published ? 'Yes' : 'No' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection