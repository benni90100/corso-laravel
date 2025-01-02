<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    {{--questo e' un commento--}}
    <h1>prova esempio</h1>

    @if($someValue===null)
    <p>somevalue e' null</p>
    @elseif($someValue==='qualcosa')
    <p>somevalue e' qualcosa</p>
    @else
    <p>somevalue e' qualcosaltro</p>
    @endif

    @isset($items)
    <h2>lista degli elementi </h2>
    <ul>
        @foreach($items as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
    @endisset

    @empty($emptyArray)
    <p>l'array e' vuoto</p>
    @else
    <p>l'array non e' vuoto</p>
    @endempty

    <h2>numeri</h2>
    <ul>
        @for($i = 0; $i < count($numbers); $i++)
            <li>{{ $numbers[$i] }}</li>
            @endfor
    </ul>
</body>
</html>