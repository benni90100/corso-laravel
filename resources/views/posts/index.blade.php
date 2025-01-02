<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>tutti i post</h1>
    @if($posts->isEmpty())
    <p>non ci sono post</p>
    @else
    <ul>
        @foreach($posts as $post)
        <li>post id: {{$post->title}} </li>
        @endforeach    
    </ul>

    @endif
</body>
</html>