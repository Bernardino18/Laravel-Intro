@extends('template')
@section("conteudo")
    <form action="/Student" method="post">
    @csrf
    Nome<input name="nome" id="nome" type="text"><br>
    MOrada<input type="text"><br>
    Codigo postal<input type="text"><br>
    LOcalidade<input type="text"><br>
    nacionalidade<input type="text"><br>
    telefone<input type="text"><br>
    email<input type="email"><br>
    observacoes<textarea></textarea>
    <input type="submit" value="submeter">
    </form>
@endsection
