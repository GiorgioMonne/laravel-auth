@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista Posts') }}</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($posts as $post)
                          <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <td><a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-info">Info</button></a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection