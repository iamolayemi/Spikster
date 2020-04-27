<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{

	protected $fillable = [
        'domain',
        'application_id',
    ];

    public function application() {
        return $this->belongsTo(Application::class, 'server_id');
    }

}
