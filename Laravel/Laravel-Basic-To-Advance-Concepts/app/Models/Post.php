<?php

namespace App\Models;
// use Attribute;
use App\Scopes\PostScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Post extends Model
{
    use HasFactory, SoftDeletes;

    // Attribute Casting
    // protected $casts = [
    //     'title' => 'encrypted', // it is encrypt title and then store in db
    // ];

    protected $table = 'posts'; // it sync with posts database table

    // Mass Fillable => we have to defin first table which we have to enter in database we have to make it fillable for security reasons 
    protected $fillable = ['title', 'gallery_id', 'user_id', 'description', 'is_publish', 'is_active', 'deleted_at', 'slug']; // all columns of posts we make it fillable

    // protected $guarded = []; // it is use for the data to be inserted when we want like upper but upper is secure then this

    // post to user find if foreign key is in the table then use belongTo otherwise hasOne and other
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Also we use  ->latestOfMany() and ->oldestOfMany()

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
    
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }


    // Accessor Value Change When Retrieve from DB

    // public function getTitlewAttribute($value){
        // return ucfirst($title); //it change title first letter to uppercase
        // return strtoupper($title); //it change title all letter to uppercase
    // }

    // laravel 9
    // protected function title(): Attribute
    // {
    //     return Attribute::make(
    //        get: fn  ($value) => ucfirst($value),
    //     );
    // }


    // Mutators Value Change When Store to DB

    // public function setTitleAttribute($value){
    //     return $this->attributes['title'] = strtolower($value);
    // }

    // laravel 9
    // protected function title(): Attribute
    // {
    //     return Attribute::make(
    //          set: fn ($value) => strtolower($value),
    //     );
    // }


    // global Scope
    // public static function booted(){
    //     static::addGlobalScope(new PostScope);
    // }

    //Custom Global Scope
    // public static function booted(){
    //     static::addGlobalScope('active', function(Builder $builder){
    //         $builder->where('is_active', 1);
    //     });
    // }

    // For Local Scope
    public function scopeActive($value){
        $value->where('is_active', 1);
    }

    public function galleryimage(){
        return $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }

    // // for slug
    // public function getRouteKeyName(){
    //     return 'slug';
    // }
} 
