<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RecordResource extends JsonResource
{
    public function getData($request)
    {
        return [
            'id' => $this->id,
	    "name" => $this->name,
	    "phone" => $this->phone,
	    "service" => $this->service,
	    "date" => $this->date,
	    "time" => $this->time,
            'delete_url' => route('records.delete', $this->id)
        ];
    }
}
