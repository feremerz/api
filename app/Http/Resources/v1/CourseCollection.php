<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
        return [
           'data'=>$this->collection->map(function ($item){
               return[
               'title'=>$item->title,
                   'created_at'=>$item->created_at
               ];
           })
        ];
    }
}
