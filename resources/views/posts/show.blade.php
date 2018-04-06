@extends('layouts.app')

@section('content')

<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

{{-- コメントの一覧 --}}
@include('posts._comments')

{{-- コメントフォーム --}}
@include('posts._comment_form')

@endsection
