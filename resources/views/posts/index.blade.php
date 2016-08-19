@extends('template')

@section('content')

    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <b>Tags:</b>
    <ul>
        @foreach($post->tags as $tag)
            <li>{{$tag->name}}</li>
        @endforeach
    </ul>
    <h3>Comments</h3>
    @foreach($post->comments as $comment)
    <b>Name: </b> {{$comment->name}}<br>
    <b>Comment: </b> {{$comment->comment}}<br>    
    @endforeach
    <br>
    @endforeach

@endsection

