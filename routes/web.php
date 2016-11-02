<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", ["as" => "question.index", "uses" => "QuestionController@index"]);
Route::get("answer/{question_id}/{form_answer}", ["as" => "question.answer", "uses" => "QuestionController@answer"]);
Route::get("result/{id}", ["as" => "question.result", "uses" => "QuestionController@result"]);

Route::get("person/add", ["as" => "person.add", "uses" => "PersonController@add"]);
Route::post("person/post", ["as" => "person.post", "uses" => "PersonController@store"]);
