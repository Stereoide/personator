<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonLike extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id', 'name',
    ];

    /**
     * Relationships
     */

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
