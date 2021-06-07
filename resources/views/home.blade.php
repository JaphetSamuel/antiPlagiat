@extends('layouts.app')

@section('content')
<div>
    @foreach($packs as $pack)
        <p>
            <span>{{$pack->nom}} ({{$pack->prix()}}) XOF</span>&nbsp;|&nbsp;<br>
            <span>{{ $pack->value }} Mots</span>
            <a href="{{ route('getPack', ['pack'=>$pack]) }}">Acheter</a>
        </p>
    @endforeach
</div>

@endsection
