<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cultura',
                'slug' => 'cultura',
                'description' => NULL,
                'order' => 1,
                'created_at' => '2023-01-06 20:01:05',
                'updated_at' => '2023-01-06 20:01:05',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Deportes',
                'slug' => 'deportes',
                'description' => NULL,
                'order' => 2,
                'created_at' => '2023-01-06 20:01:13',
                'updated_at' => '2023-01-06 20:01:13',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Política',
                'slug' => 'politica',
                'description' => NULL,
                'order' => 3,
                'created_at' => '2023-01-06 20:01:32',
                'updated_at' => '2023-01-06 20:01:32',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Negocios',
                'slug' => 'negocios',
                'description' => NULL,
                'order' => 4,
                'created_at' => '2023-01-06 20:01:58',
                'updated_at' => '2023-01-06 20:01:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Farándula',
                'slug' => 'farandula',
                'description' => NULL,
                'order' => 5,
                'created_at' => '2023-01-06 20:02:19',
                'updated_at' => '2023-01-06 20:02:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}