@extends("welcome")

@section("content")
    Odpowiedź:<br><br>

    @if($person->file)
    	<img src="{{ url("/img/people/" . $person->file) }}" height="300px">
    @else
    	<img src="{{ url("/img/people/not_found.png") }}">
    @endif

    <br><br>

    <strong>{{ $person->name}}</strong><br><br>

    <a href="{{ route("question.index") }}">Spróbuj jeszcze raz</a>
@endsection
