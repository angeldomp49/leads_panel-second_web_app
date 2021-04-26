<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\{
    Contact as ContactModel,
    FavProductType as FavProductTypeModel,
    FavTopic as FavTopicModel
};

use App\Http\Resources\{
    Contact as ContactResource,
    FavProductType as FavProductTypeResource,
    FavTopic as FavTopicResource
};

class Lead extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'socialMedia' => $this->socialMedia->name,
            'information' => $this->information,
            'contacts' => ContactResource::collection(ContactModel::where('lead_id', $this->id)->get()),
            'favProductTypes' => FavProductTypeResource::collection(FavProductTypeModel::where('lead_id', $this->id)->get()),
            'favTopics' => FavTopicResource::collection(FavTopicModel::where('lead_id', $this->id)->get())
        ];
    }
}
