<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PizzaCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $path = $this->image->store('public/pizza');
        return [
            'name' => $this->name,
            'description' => $this->description,
            'small_pizza_price' => $this->small_pizza_price,
            'medium_pizza_price' => $this->medium_pizza_price,
            'large_pizza_price' => $this->large_pizza_price,
            'category' => $this->category,
            'image' => $path,
        ];
    }
}
