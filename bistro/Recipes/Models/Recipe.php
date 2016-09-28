<?php

namespace Bistro\Recipes\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $table = "recipes";

  protected $fillable = [
    'name','slug','meta','ingredients','procedures','quality'
  ];

  protected $casts = [
    'meta'        => 'array',
    'ingredients' => 'array',
    'procedures'  => 'array',
    'quality'     => 'array'
  ];


  public function getCategoryAttribute()
  {
    $meta = $this->meta;
    //dd($meta['category']);
    $cat = "";  
    if(array_key_exists('category', $meta)) {
      $cat = $meta['category'];
    }
    
    return $cat;
  }
}