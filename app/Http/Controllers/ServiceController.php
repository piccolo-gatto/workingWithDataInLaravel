<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;
use App\Models\Service;


class ServiceController extends Controller {
	function index() {
		$services = Service::all();
		return view("services", ["rows" => $services]);
	}

	function add() {
		return view("add_service");
	}
	
	
	function view(Service $service) {
		return view("service", ["service" => $service]);
	}

	function edit(Service $service) {
		return view("edit_service", ["service" => $service]);
	}

	function store(Request $request) {
		$request->validate([
			"id" => "nullable|exists:services",
			"name" => "required",
			"price" => "nullable|numeric",
			"delite_at" => "nullable"
		], [
			"name" => "Укажите название услуги!",
			"price" => "Укажите стоимость услуги!"
		]);

		$arr = $request;

		$service = Service::find($arr->id) ?? new Service;
		$service->name = $arr->name;
		$service->price = $arr->price;
		$service->save();

		return redirect('/services')->with('success', '');
	}
		
	function drop(Service $service) {
	
		$records = Record::all();
		foreach ($records as $record) {
			if ($record->service_id == $service->id)
				$record->delete();
		}
		$service->delete();
		return redirect('/services')->with('success', '');
	}
}
