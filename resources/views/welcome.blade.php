 @extends('layouts.main')

 @section('title', 'Carl Events')

 @section('content')

 <h1>Algum titulo</h1>
        @if(4 >= 5)
            <p>A condição é true</p>
        @else
            <p>A condição é false</p>
        @endif
        
        @if($nome === 'João')
        <p>O nome é João</p>
        @else
        <p>O nome não é João</p>
        @endif

        <p>{{$idade}}</p>

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop->index}}</p>
            <p>{{$nome}}</p>
        @endforeach

@endsection