<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $title
 * @property mixed $author
 * @property mixed $slug
 * @property mixed $price
 * @property mixed $images
 * @property mixed $category
 * @property mixed $body
 * @property mixed $publisher
 * @property mixed $excerpt
 */
class Book extends JsonResource
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
            'title' => $this->title,
            'category' => $this->category->name,
            'publisher' => $this->publisher->name,
            'author' => $this->author->name,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'price' => $this->price,
            'images' => $this->images,
        ];
    }
}
