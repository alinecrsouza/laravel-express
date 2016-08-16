@extends('template')

@section('content')
<!-- Blog Posts -->
<h2>
    {{$post['title']}}
</h2>
<p class="lead">
    by <a href="index.php">{{$post['author']}}</a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on {{date('F d, Y', strtotime($post['date_creation']))}}</p>
<hr>
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<p>{{$post['content']}}</p>
<p> Link to the <a href={{$post['source']}}>source</a>.</p>
<hr>


@stop