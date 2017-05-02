<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      DB::table('users')->insert(array(
         array(
            'name' => 'Exodus Admin',
            'email' => 'exodus@yahoo.com',
            'password' => bcrypt('admin123'),
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
         )
      ));
   }
}
