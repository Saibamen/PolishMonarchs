@extends("welcome")

@section("content")
    @if(isset($first_message))
        Pomyśl o władcy polski i odpowiedz na pytania.
    @endif

    {{ $question->name}}<br><br>

    <a href="{{ route("question.answer", [$question->id, 1]) }}" class="btn btn-success" role="button">Tak</a>
    <a href="{{ route("question.answer", [$question->id, 0]) }}" class="btn btn-danger" role="button">Nie</a>
@endsection
