@extends("welcome")

@section("content")
    <legend><strong>Odpowiedź:</strong></legend>

    @if($person->file)
    	<img src="{{ url("/img/people/" . $person->file) }}" height="300px">
    @else
    	<img src="{{ url("/img/people/not_found.png") }}">
    @endif

    <br><br>

    <strong>{{ $person->name}}</strong><br><br>

    <div class="again"><a href="{{ route("question.index") }}"><strong>Spróbuj jeszcze raz</strong></a></div>
@endsection
