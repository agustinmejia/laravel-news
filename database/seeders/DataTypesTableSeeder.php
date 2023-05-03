<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2021-06-02 09:55:30',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Users',
                'display_name_singular' => 'User',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2022-08-14 15:31:50',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2021-06-02 09:55:30',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menus',
                'display_name_singular' => 'Menu',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2021-06-02 09:55:30',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2021-06-02 09:55:31',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Role',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2022-08-14 15:40:05',
            ),
            3 => 
            array (
                'controller' => NULL,
                'created_at' => '2022-05-24 07:21:20',
                'description' => NULL,
                'details' => '{"order_column":"table_name","order_display_column":"table_name","order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Permisos',
                'display_name_singular' => 'Permiso',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 4,
                'model_name' => 'App\\Models\\Permission',
                'name' => 'permissions',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'permissions',
                'updated_at' => '2022-05-24 07:21:20',
            ),
            4 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-01-06 11:22:46',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Categorías',
                'display_name_singular' => 'Categoría',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 5,
                'model_name' => 'App\\Models\\Category',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2023-01-06 11:43:33',
            ),
            5 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-01-06 11:40:43',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Noticias',
                'display_name_singular' => 'Noticia',
                'generate_permissions' => 1,
                'icon' => 'voyager-news',
                'id' => 6,
                'model_name' => 'App\\Models\\Post',
                'name' => 'posts',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'posts',
                'updated_at' => '2023-04-11 13:54:16',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-01-26 07:33:58',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Videos',
                'display_name_singular' => 'Video',
                'generate_permissions' => 1,
                'icon' => 'voyager-video',
                'id' => 7,
                'model_name' => 'App\\Models\\Video',
                'name' => 'videos',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'videos',
                'updated_at' => '2023-01-28 12:12:49',
            ),
            7 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-01-26 08:03:17',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Clientes',
                'display_name_singular' => 'Cliente',
                'generate_permissions' => 1,
                'icon' => 'voyager-people',
                'id' => 8,
                'model_name' => 'App\\Models\\Customer',
                'name' => 'customers',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'customers',
                'updated_at' => '2023-05-03 10:20:54',
            ),
        ));
        
        
    }
}