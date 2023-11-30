<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\RecordResource; 
use App\Models\Record;
use App\Models\Service;

class RecordController extends Controller {
	function index() {
		$records = Record::all(); 

		return view("records", ["rows" => $records, "services" => Service::all()]);
	}

	function add() {

		return view("add_record", ["services" => Service::all()]);
	}

	function view(Record $record) {
		return view("record", ["record" => $record]);
	}

	function edit(Record $record) {
		return view("edit_record", ["record" => $record, "services" => Service::all()]);
	}

	function store(Request $request) {
		$request->validate([
			"id" => "nullable|exists:records",
			"name" => "required",
			"phone" => "required",
			"service" => "required|exists:services,id",
			"date" => "required",
			"time" => "required",
			"delite_at" => "nullable"
		], [
			"name" => "Укажите своё имя!",
			"phone" => "Укажите свой email!",
			"service" => "Выберете услугу!",
			"date" => "Укажите дату!",
			"time" => "Укажите время!"
		]);

		$arr = $request;

		$record = Record::find($arr->id) ?? new Record;
		$record->name = $arr->name;
		$record->phone = $arr->phone;
		$record->service_id = $arr->service;
		$record->date = $arr->date;
		$record->time = $arr->time;
		$record->save();

		return redirect('/records')->with('success', '');
	}

	function drop(Record $record) {
		$record->delete();
		return redirect('/records')->with('success', '');
	}
}
