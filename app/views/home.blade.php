@extends('templates.default')

@section('content')
    @if($posts->count() )
        @foreach($posts as $post)
           <article>
                <h2>{{ $post->title }}</h2>
                <p>{{ Markdown::parse($post->body )}}</p>
                <a href="">Read more &rarr;</a>
            </article>
        @endforeach
    @else
        <article>sorry, no post.</article>
    @endif
@stop('content')