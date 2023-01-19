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
                'value' => 'DelfinTV',
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
                'value' => 'Una empresa creada por una familia de comunicadores desde 2015, iniciamos nuestros primeros pasos en las redes sociales manejamos la producción y difusión de contenidos, con responsabilidad y calidad.',
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
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 17,
                'group' => 'Site',
            ),
            4 => 
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
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'MiBlog',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Sistema de administración de noticias',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            7 => 
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
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 5,
                'group' => 'Admin',
            ),
            10 => 
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
            11 => 
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
            12 => 
            array (
                'id' => 13,
                'key' => 'social.twitter',
                'display_name' => 'Twitter',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Social',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'social.instagram',
                'display_name' => 'Instagram',
                'value' => 'https://www.instagram.com/canaldelfintv/',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Social',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'social.youtube',
                'display_name' => 'Youtube',
                'value' => 'https://www.youtube.com/@canaldelfintv',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Social',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'social.whatsapp',
                'display_name' => 'WhatsApp',
                'value' => '59169024457',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Social',
            ),
            16 => 
            array (
                'id' => 18,
                'key' => 'acerca-de.banner',
                'display_name' => 'Banner',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 12,
                'group' => 'Acerca de',
            ),
            17 => 
            array (
                'id' => 19,
                'key' => 'acerca-de.description',
                'display_name' => 'Descripción',
                'value' => 'Somos una empresa creada por una familia de comunicadores desde 2015, iniciamos nuestros primeros pasos en las redes sociales manejamos la producción y difusión de contenidos, con responsabilidad y calidad.
Somos “Delfín” por qué nos identificamos por ser serviciales y ser un espejo, reflejamos todas las realidades, y en este portal abordamos las distintas perspectivas.
Somos emprendedores por naturaleza, trabajamos en medios de comunicación por años, hoy iniciamos nuevos desafíos a través de este medio de comunicación tenemos el potencial de proponer agenda, generar conversación e incidir en la dinámica general de la sociedad. 
Creamos, producimos y emitimos contenidos que contribuyan a construir una huella cultural positiva para el departamento del Beni, estamos en una región oriental amazónica, nos encontramos en Bolivia para el mundo, departamento del Beni Capital Trinidad.

Consideramos la información como un bien público al servicio de la sociedad y estamos convencidos de que es posible ser exitosos haciendo el mejor periodismo, responsable y coherente, tras la razón y la verdad.
Sabemos que el valor del entretenimiento radica en la emoción como cohesionador social. 
En consecuencia, presentamos temas que interesan, divierten y emocionan, y cuando es necesario o pertinente, incluimos puntos de análisis y reflexión.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 13,
                'group' => 'Acerca de',
            ),
            18 => 
            array (
                'id' => 20,
                'key' => 'site.address',
                'display_name' => 'Address',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Site',
            ),
            19 => 
            array (
                'id' => 21,
                'key' => 'site.phone',
                'display_name' => 'Phone',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 15,
                'group' => 'Site',
            ),
            20 => 
            array (
                'id' => 22,
                'key' => 'site.email',
                'display_name' => 'Email',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Site',
            ),
            21 => 
            array (
                'id' => 23,
                'key' => 'site.navbar_logo',
                'display_name' => 'Navbar Logo',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 6,
                'group' => 'Site',
            ),
            22 => 
            array (
                'id' => 24,
                'key' => 'streaming.iframe',
                'display_name' => 'Código de inserción',
                'value' => '<iframe width="100%" src="https://cloudvideo.servers10.com:2020/VideoPlayer/8226?autoplay=1" style="position: absolute;top: 0;left: 0;bottom: 0;right: 0;width: 100%;height: 100%;" scrolling="no" frameborder="0" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 19,
                'group' => 'Streaming',
            ),
            23 => 
            array (
                'id' => 25,
                'key' => 'streaming.status',
                'display_name' => 'Estado',
                'value' => '1',
                'details' => NULL,
                'type' => 'checkbox',
                'order' => 18,
                'group' => 'Streaming',
            ),
        ));
        
        
    }
}