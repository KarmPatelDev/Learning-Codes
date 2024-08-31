<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Gallery extends Model
{
    use HasFactory;

    public $uploads =  '/storage/assets/posts/images/';

    protected $fillable = ['name', 'type'];

    public const Type = 1;


    protected function name(): Attribute{
        return Attribute::make(
           get: fn ($value) => $this->uploads . $value,
        );
    }

}
