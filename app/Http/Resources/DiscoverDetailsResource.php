<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class DiscoverDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id'=> $this->id,
            'titel_ar'  => $this->titel_ar,
            'titel_en' => $this->titel_en,
            'sub_titel_ar'  => $this->titel_ar,
            'sub_titel_en' => $this->titel_en,
            'description_ar' => $this->description_ar,
            'description_en' => $this->	description_en,
            'sub_image'=> $this->sub_image_url,
            // 'thumbnail'=> $this->thumbnail_url,
            'is_active'=> $this->is_active,
            'cities' => $this->discoverCities,
            'category' => Category::find($this->category_id),
            'products' => $this->products()->with('productImages','productSizes','productCuts','productPreparations','shalwata','productPaymentTypes','productCities', 'tags')
                ->get(),
          ];
    }
}
