@extends('template')

@section('content')
<!-- Blog Posts -->
@foreach($posts as $key => $value)
<h2>
    <a href="/<?= $key ?>">{{$value['title']}}</a>
</h2>
<p class="lead">
    by <a href="#">{{$value['author']}}</a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on {{date('F d, Y', strtotime($value['date_creation']))}}</p>
<hr>
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<p>{{substr($value['content'], 0, strpos($value['content'], ' ', 420))}}...</p>
<a class="btn btn-primary" href="/<?= $key ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
@endforeach

@stop