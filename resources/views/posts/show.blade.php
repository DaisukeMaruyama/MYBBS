<x-layout>
    <x-slot name="title">
        {{$post->title}} - MYBBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>
        <span>{{$post->title}}</span>
        <a href="{{route('posts.edit', $post)}}">[Edit]</a>
        <form method="post" action="{{route('posts.destroy', $post)}}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[x]</button>
        </form>
    </h1>

    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comments</h2>
        <ul>
            <li>
                <form method="post" action="" class="comment-form">
                    @method('POST')
                    @csrf
                    <input type="text" name="body">
                    <button>Add</button>
                </form>
            </li>
            @foreach ($post->comments as $comment)
            <li>
                {{$comment->body}}
            </li>
            @endforeach
        </ul>

    <script>
        'use strict';
        const delete_post = document.getElementById('delete_post');
        delete_post.addEventListener('submit', e => {
            e.preventDefault();

            if (!confirm('Are you sure to delete?')) {
                return;
            }

            e.target.submit();
        });
    </script>
</x-layout>
