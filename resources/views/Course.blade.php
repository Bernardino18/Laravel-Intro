@extends('template')
@section("conteudo")
    <h2>Courses</h2>
    <table>
        @foreach($courses as $course)
        <tr>
            <td>
                {{$course}}
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
