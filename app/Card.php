<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title', 'html_content', 'board_id', 'card_type', 'is_visible'];
    public function board()
    {
        return $this->belongsTo('App\Board');
    }
}