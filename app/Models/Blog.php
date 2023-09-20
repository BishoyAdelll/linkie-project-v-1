<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image',
        'mini_content',
    ];
    protected $casts=[
        'created_at'=>'datetime'
    ];
    public function getFormatedDate(){
        return $this->created_at->format('F JS Y');
    }
    public  function shortBody(){
        return Str::words(strip_tags($this->mini_content),'20');
    }
}
