@extends("welcome")

@section("content")
    @if(isset($first_message) && $first_message !== false)
        Pomyśl o królu polskim i odpowiedz na pytania.<br>
    @endif

    <div style="color: #17295b"><strong>{{ $question->name}}</strong></div><br><br>

    <a href="{{ route("question.answer", [$question->id, 1]) }}" class="btn btn-success" role="button">Tak</a>
    <a href="{{ route("question.answer", [$question->id, 0]) }}" class="btn btn-danger" role="button">Nie</a>
@endsection
