@extends('layouts.app')

@section('app')

<h1>posts.create</h1>

{{ Form::open(['route' => ['posts.store']]) }}
    <div>
        {{ Form::text('title', $post->title) }}
    </div>

    <div>
        {{ Form::textarea('content', $post->content) }}
    </div>

    {{ Form::submit('create') }}
{{ Form::close() }}

@endsection
