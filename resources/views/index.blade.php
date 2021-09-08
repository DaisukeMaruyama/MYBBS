<x-layout>
    <x-slot name="title">
        MYBBS
    </x-slot>

    <h1>
        <span>MYBBS</span>
        <a href="">[Add]</a>
    </h1>
    <ul>
        @forelse ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post->id)}}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
          <li>No posts yet</li>
        @endempty
    </ul>
</x-layout>
