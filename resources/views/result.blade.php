@extends("welcome")

@section("content")
    Odpowiedź:<br><br>

    <strong>{{ $person->name}}</strong><br><br>

    <a href="{{ route("question.index") }}">Spróbuj jeszcze raz</a>
@endsection
