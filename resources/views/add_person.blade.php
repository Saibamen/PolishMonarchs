@extends("welcome")

@section("content")
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <legend><strong>Dodaj postać</strong></legend>

    {{ Form::open(["route" => "person.post", "method" => "post", "class" => "form-horizontal"]) }}
    	<div class="form-group{{ $errors->has("name") ? " has-error" : "" }}">
    		{{ Form::label("name", "Nazwa", ["class" => "col-md-4 control-label"]) }}

    		<div class="col-md-6">
               {{ Form::text("name", old("name"), ["class" => "form-control", "required" => "required", "autofocus" => "autofocus"]) }}

                @if($errors->has("name"))
                    <span class="help-block">
                        <strong>{{ $errors->first("name") }}</strong>
                    </span>
                @endif
            </div>
    	</div>

    	<div class="form-group{{ $errors->has("description") ? " has-error" : "" }}">
    		{{ Form::label("description", "Opis", ["class" => "col-md-4 control-label"]) }}

    		<div class="col-md-6">
               {{ Form::textarea("description", old("description"), ["class" => "form-control", "required" => "required"]) }}

                @if($errors->has("description"))
                    <span class="help-block">
                        <strong>{{ $errors->first("description") }}</strong>
                    </span>
                @endif
            </div>
    	</div>

    	<div class="text-center">
            <button type="submit" class="btn btn-primary">Wyślij</button>
        </div>

    {{ Form::close() }}

@endsection
