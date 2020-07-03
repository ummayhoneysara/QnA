<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function setTitleAtrribute($value)
    {
        $this->atrributes['title'] = $value;
        $this->atrributes['slug'] = str_slug($value);
    }
}
