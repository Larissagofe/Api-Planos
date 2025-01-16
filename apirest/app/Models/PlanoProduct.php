<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanoProduct extends Model
{
    // estabelece relação de muitos para muitos
    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}