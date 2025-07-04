<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
