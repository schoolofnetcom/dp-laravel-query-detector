<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <h1>Lista de posts</h1>

    {{--
        LAZY LOAD (carregamento posterior)
        EAGER LOAD (carregamento prematura)
    --}}

    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                {{ $post->title }} ({{ count($post->comments) }})
                <br>
                @if(count($post->tags))
                    @foreach($post->tags as $tag)
                        {{ $tag->name }}
                    @endforeach
                @endif
            </li>
        @endforeach
    </ul>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
