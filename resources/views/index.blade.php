<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MYBBS</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <h1>MYBBS</h1>
            <ul>
                @forelse ($posts as $i => $post)
                  <li><a href="/posts/{{ $i }}">{{ $post }}</a></li>
                @empty
                  <li>No posts yet</li>
                @endempty
            </ul>
        </div>
    </body>
</html>

