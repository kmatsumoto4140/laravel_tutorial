@extends('layouts.app')

@section('app')

<h1>posts.index</h1>
    @if (Session::has('flash_message'))
                {{ Session::get('flash_message') }}
    @endif

    <!-- これでリクエストにデータを渡している　-->
    {{ Form::open(['route' => ['posts.index'], 'method' => 'get']) }}
    {{-- {{ Form::open(['posts.index' => 'GET']) }} --}}
    <div>
      {{ Form::text('keyword', null) }}
      {{ Form::submit('検索') }}
    </div>
    {{ Form::close() }}

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ link_to_route('posts.show', $post->title, [$post->id]) }}
                {{ link_to_route('posts.edit', '[Edit]', [$post->id]) }}
                {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'name' => 'delete_' . $post->id, 'style' => 'display:inline;']) }}
                    <a href="javascript:document.{{ 'delete_' . $post->id }}.submit()" onclick="return confirm('削除しますか？');">[Delete]</a>
                {{ Form::close() }}
            </li>
        @endforeach
        <li>
            {{ link_to_route('posts.create', '[new post]') }}
        </li>
    </ul>

@endsection
