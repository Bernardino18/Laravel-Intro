@extends('template')
@section("conteudo")
        Morada da Atec: {{$address}}
        <form action="/Contact" method="post">
        @csrf
        Nome <input name="nome" id="nome" type="text">
        Email <input type="email" name="" id="">
        Mensagem <textarea name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="">
        </form>
        
@endsection
