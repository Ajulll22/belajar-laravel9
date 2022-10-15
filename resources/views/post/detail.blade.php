@extends('layouts.main')

@section('content')
<div class="article mb-5">
    <h2>{{ $posts->title }}</h2>
    <p>By. Ajulll in <a href="/category/">{{ $posts->category->name }}</a></p>
    {!! $posts->body !!}
</div>

<a href="/posts">
    < Back</a>
        @endsection