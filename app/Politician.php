<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politician extends Model
{
    protected $fillable = [
        'politician_id',
        'name',
        'party'
    ];

    /**
     * Lists all politicians
     * 
     * @return array
     */
    public function findAll() {
        return $this->get();
    }
}
