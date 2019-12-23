@extends('layouts.app')

@section('content')

<a href="/posts">&lt;&lt; Go back</a>

<h1>{{$post->title}}</h1>
<small>Written on {{$post->created_at}}</small>
<hr>
<div>
    {{$post->body}}
</div>

@endsection