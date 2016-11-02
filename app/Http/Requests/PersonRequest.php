<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            "name" => "required|min:3",
            "description" => "required",
        ];
    }

}
