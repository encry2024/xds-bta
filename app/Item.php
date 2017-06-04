<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   //
   protected $fillable = [
      'project_id', 'category', 'sub_category', 'type', 'description', 'item', 'quantity', 'unit', 'material'
   ];

   public function project()
   {
      return $this->belongsTo(Project::class);
   }
}
