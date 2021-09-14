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
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[x]</button>
        </form>
    </h1>

    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comments</h2>
        <ul>
            <li>
                <form method="post" action="{{ route('comments.store', $post) }}" class="comment-form">
                    @method('POST')
                    @csrf
                    <input type="text" name="body">
                    <button>Add</button>
                </form>
            </li>
            @error('body')
                <div class="error" >{{$message}}</div>
            @enderror
            @foreach ($post->comments()->latest()->get() as $comment)
            <li>
                {{$comment->body}}
                <form method="post" action="{{ route('comments.destroy', $comment) }}" class="delete-comment">
                    <button class="btn">[x]</button>
                    @method('DELETE')
                    @csrf

                </form>
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

        document.querySelectorAll('.delete-comment').forEach(form => {
            form.addEventListener('submit', e => {
                e.preventDefault();

                if(!confirm('Sure to delete?')){
                    return;
                }

                form.submit();
            });
        });

    </script>
</x-layout>
