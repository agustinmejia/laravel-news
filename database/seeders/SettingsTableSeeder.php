<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Laravel News',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Blog de Noticias Dinámico',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => NULL,
                'details' => '',
                'type' => 'image',
                'order' => 6,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            4 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Laravel News',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Blog de Noticias Dinámico',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => NULL,
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 11,
                'key' => 'site.keyboards',
                'display_name' => 'Keyboards',
                'value' => 'blog, noticias, news, actualidad',
                'details' => NULL,
                'type' => 'text',
                'order' => 3,
                'group' => 'Site',
            ),
            9 => 
            array (
                'id' => 12,
                'key' => 'social.facebook',
                'display_name' => 'Facebook',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Social',
            ),
            10 => 
            array (
                'id' => 13,
                'key' => 'social.twitter',
                'display_name' => 'Twitter',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Social',
            ),
            11 => 
            array (
                'id' => 14,
                'key' => 'social.instagram',
                'display_name' => 'Instagram',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Social',
            ),
            12 => 
            array (
                'id' => 15,
                'key' => 'social.youtube',
                'display_name' => 'Youtube',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Social',
            ),
            13 => 
            array (
                'id' => 16,
                'key' => 'social.whatsapp',
                'display_name' => 'WhatsApp',
                'value' => '59175199157',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Social',
            ),
            14 => 
            array (
                'id' => 18,
                'key' => 'acerca-de.banner',
                'display_name' => 'Banner',
                'value' => NULL,
                'details' => NULL,
                'type' => 'image',
                'order' => 12,
                'group' => 'Acerca de',
            ),
            15 => 
            array (
                'id' => 19,
                'key' => 'acerca-de.description',
                'display_name' => 'Descripción',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text_area',
                'order' => 13,
                'group' => 'Acerca de',
            ),
            16 => 
            array (
                'id' => 20,
                'key' => 'site.address',
                'display_name' => 'Address',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Site',
            ),
            17 => 
            array (
                'id' => 21,
                'key' => 'site.phone',
                'display_name' => 'Phone',
                'value' => '+59175199157',
                'details' => NULL,
                'type' => 'text',
                'order' => 17,
                'group' => 'Site',
            ),
            18 => 
            array (
                'id' => 22,
                'key' => 'site.email',
                'display_name' => 'Email',
                'value' => 'desarrollocreativodev@gmail.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 18,
                'group' => 'Site',
            ),
            19 => 
            array (
                'id' => 23,
                'key' => 'site.navbar_logo',
                'display_name' => 'Navbar Logo',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            20 => 
            array (
                'id' => 25,
                'key' => 'site.status',
                'display_name' => 'Estado',
                'value' => '1',
                'details' => NULL,
                'type' => 'checkbox',
                'order' => 25,
                'group' => 'Site',
            ),
            21 => 
            array (
                'id' => 26,
                'key' => 'site.loader',
                'display_name' => 'Site Loader',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 14,
                'group' => 'Site',
            ),
            22 => 
            array (
                'id' => 27,
                'key' => 'site.font',
                'display_name' => 'Font',
                'value' => 'Roboto',
                'details' => '{
"options": {
"Roboto": "Roboto",
"Montserrat": "Montserrat",
"Lora": "Lora",
"Ubuntu": "Ubuntu",
"Dosis": "Dosis",
"Martel": "Martel"
}
}',
                'type' => 'select_dropdown',
                'order' => 15,
                'group' => 'Site',
            ),
            23 => 
            array (
                'id' => 28,
                'key' => 'site.primary-color',
                'display_name' => 'Primary Color',
                'value' => '#017601',
                'details' => NULL,
                'type' => 'text',
                'order' => 21,
                'group' => 'Site',
            ),
            24 => 
            array (
                'id' => 29,
                'key' => 'site.primary-color-rgb',
                'display_name' => 'Primary Color RGB',
                'value' => '1,118,1',
                'details' => NULL,
                'type' => 'text',
                'order' => 22,
                'group' => 'Site',
            ),
            25 => 
            array (
                'id' => 30,
                'key' => 'site.primary-color-text',
                'display_name' => 'Primary Color Text',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 23,
                'group' => 'Site',
            ),
            26 => 
            array (
                'id' => 31,
                'key' => 'site.template',
                'display_name' => 'Template',
                'value' => 'templates.tailnews.',
                'details' => '{
"options": {
"": "Default",
"templates.tailnews.": "Tailnews",
"templates.another.": "Another"
}
}',
                'type' => 'select_dropdown',
                'order' => 24,
                'group' => 'Site',
            ),
        ));
        
        
    }
}