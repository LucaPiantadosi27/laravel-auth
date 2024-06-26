@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Tutti i post</h1>

    <table class="table mb-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Contenuto</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            
            {{-- @dump($posts) --}}
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td><a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-info">Mostra</a></td>
                <td><a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
      </table>


      <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Aggiungi un post</a>

</div>

@endsection