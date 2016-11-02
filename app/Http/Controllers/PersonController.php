<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\NewPerson;
use Illuminate\Http\Request;

class PersonController extends Controller {

    public function add() {
        return view("add_person");
    }

    public function store(PersonRequest $request) {
        $object = new NewPerson;

        $object->fill($request->all());
        $object->save();

        $request->session()->forget("matched_people");
        $request->session()->forget("answered_questions");

        return redirect()->route("question.index");
    }

}
