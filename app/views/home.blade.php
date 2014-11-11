@extends('templates.default')

@section('content')
    @if($posts->count() )
        @foreach($posts as $post)
           <article>
                <h2><a href="{{ URL::action('post-show', $post->slug)}}">{{ $post->title }}</a></h2>
                <p>{{ Markdown::parse($post->body )}}</p>
                <a href="{{ URL::action('post-show', $post->slug)}}">Read more &rarr;</a>
            </article>
        @endforeach
    @else
        <article>sorry, no post.</article>
    @endif
@stop('content')