<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMediaUser extends Model
{

    protected $fillable = [
        'social_media_id',
        'social_media_name',
        'politician_id'
    ];

    /**
     * Ranks the social medias according to its adepts number
     * 
     * @return array
     */
    public function rank() {
        $smUsers = $this->get();
        $rank = [];
        foreach($smUsers as $smUser) {
            if(!array_key_exists($smUser['social_media_name'], $rank)){
               $rank[$smUser['social_media_name']] = 0; 
            }

            $rank[$smUser['social_media_name']]++;
        }
        arsort($rank);
        return $rank;
    }
}
