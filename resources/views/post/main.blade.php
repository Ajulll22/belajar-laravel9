@extends('layouts.main')

@section('content')
<div class="articles">
    @forelse ($posts as $post )
    <a href="/posts/{{ $post->slug }}">
        <h2>{{ $post->title }}</h2>
    </a>
    <h5>{{ $post->author }}</h5>
    <div class="mb-5">
        {!! $post->excerpt !!}
    </div>
    @empty
    <div class="text-center">
        Data Tidak Ada
    </div>

    @endforelse
</div>
@endsection