<x-layout>
    <h1>MYBBS</h1>
    <ul>
        @forelse ($posts as $i => $post)
            <li>
                <a href="{{route('posts.show', $i)}}">
                    {{ $post }}
                </a>
            </li>
        @empty
          <li>No posts yet</li>
        @endempty
    </ul>
</x-layout>
