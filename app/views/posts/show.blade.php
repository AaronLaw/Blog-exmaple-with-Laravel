@extends('templates.default')

@section('content')
           <article>
                <h2>{{ $post->title }}</h2>
                <p>{{ Markdown::parse($post->body )}}</p>
            </article>
@stop('content')