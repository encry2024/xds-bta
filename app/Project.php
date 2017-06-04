<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Excel;
use DB;

class Project extends Model
{

   public function item()
   {
      return $this->hasMany(Item::class);
   }

   //
   public static function importExcel($request)
	{
      
	}
}
