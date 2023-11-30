<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    public function getData($request)
    {
        return [
            'id' => $this->id,
	    "name" => $this->name,
	    "price" => $this->price,
            'delete_url' => route('services.delete', $this->id)
        ];
    }
}
