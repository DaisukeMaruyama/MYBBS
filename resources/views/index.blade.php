<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MYBBS</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MYBBS</h1>
            <ul>
                @forelse ($posts as $post)
                  <li>{{ $post }}</li>
                @empty
                  <li>No posts yet</li>
                @endempty
            </ul>
        </div>
    </body>

</html>

