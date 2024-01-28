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
                'value' => 'La Palabra del Beni',
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
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 2,
                'group' => 'Admin',
            ),
            6 => 
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
            7 => 
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
            8 => 
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
            9 => 
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
            10 => 
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
            11 => 
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
            12 => 
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
            13 => 
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
            14 => 
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
            15 => 
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
            16 => 
            array (
                'id' => 21,
                'key' => 'site.phone',
                'display_name' => 'Phone',
                'value' => '+59175199157',
                'details' => NULL,
                'type' => 'text',
                'order' => 21,
                'group' => 'Site',
            ),
            17 => 
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
            18 => 
            array (
                'id' => 23,
                'key' => 'site.navbar_logo',
                'display_name' => 'Navbar Logo',
                'value' => 'settings\\January2024\\Gm4yda377PZjQUsVBvYg.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            19 => 
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
            20 => 
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
            21 => 
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
            22 => 
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
            23 => 
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
            24 => 
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
            25 => 
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
            26 => 
            array (
                'id' => 32,
                'key' => 'acerca-de.long-description',
                'display_name' => 'Descripción larga',
                'value' => '<p class="mb-5">Aenean sodales lacus est, at ultricies augue ele ifend sit amet.&nbsp;<ins>Be yourself</ins>&nbsp;everyone else is already taken, sem mi placerat felis, ac suscip ligula ex id metus. Vivamus aliquet sit amet nisi non faucibus. Orci varius natoque penatibus et magnis dis parturient montes.</p>
<h2 class="w-full float-left text-xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">Start your Morning with Smiles</h2>
<p class="mb-5">Integer egestas ipsum eget metus sodales consectetur. Nullam ultricies posuere cursus. Duis vitae lorem porta, venenatis nibh ac, laoreet massa. Nam risus lacus, porta eu diam id, fringilla porta risus. Aenean sit amet malesuada diam.</p>
<figure class="text-center mb-6"><img class="max-w-full h-auto" src="http://127.0.0.1:8000/templates/tailnews/img/dummy/post1.jpg" alt="Image description">
<figcaption>Type here your description</figcaption>
</figure>
<h3 class="text-2xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">Ordered and unordered list</h3>
<ul class="pl-8 mb-4">
<li class="list-disc list-inside">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
<ol class="pl-8 mb-4">
<li class="list-decimal list-inside">Itaque earum rerum hic tenetur a sapiente delectus</li>
<li class="list-decimal list-inside">which of us ever undertakes laborious physical exercise</li>
</ol>
</li>
<li class="list-disc list-inside">Et harum quidem rerum facilis est et expedita distinctio</li>
<li class="list-disc list-inside">Itaque earum rerum hic tenetur a sapiente delectus</li>
<li class="list-disc list-inside">which of us ever undertakes laborious physical exercise</li>
</ul>
<p class="mb-5">Cras justo velit, ultrices vel vehicula eu, viverra in turpis. Donec lobortis at lorem ac semper. Mauris malesuada ligula in interdum pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
<p class="mb-5">Integer egestas ipsum eget metus sodales consectetur. Nullam ultricies posuere cursus. Duis vitae lorem porta, venenatis nibh ac, laoreet massa. Nam risus lacus, porta eu diam id, fringilla porta risus. Aenean sit amet malesuada diam.</p>
<blockquote class="relative p-4 border-l-4 border-red-700 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-40 mb-4 text-xl">
<p class="ml-16 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
<footer class="ml-16 text-base">Quote by&nbsp;<cite title="Source Title">Ari Budin</cite></footer></blockquote>
<p class="mb-5">Vivamus purus orci, molestie vel erat sed, consectetur posuere ligula. Vestibulum<br>iaculis dignissim laoreet. Cras tincidunt always have Paris, at lobortis ligula laoreet. Etiam eu sapien sit amet neque aliquam consequat nec in velit. Aliquam sit amet erat sed augue bibendum vehicula non at lacus. Phasellus scelerisque in elit a els.</p>
<p class="mb-5">Cras justo velit, ultrices vel vehicula eu, viverra in turpis. Donec lobortis at lorem ac semper. Mauris malesuada ligula in interdum pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
<figure class="lg:float-left text-center lg:text-left ml-0 lg:-ml-4 mr-7 mb-7"><img class="max-w-full h-auto mx-auto" src="http://127.0.0.1:8000/templates/tailnews/img/dummy/post2.jpg" alt="Image description">
<figcaption>Align left images</figcaption>
</figure>
<p class="mb-5">Morbi at lacinia risus. Donec vitae justo sed augue sollicitudin dignissim ut vitae ipsum. Proin at imperdiet ante, non blandit mauris. Nullam eu lobortis justo.</p>
<p class="mb-5">Fusce vestibulum blandit justo non rhoncus. Maecenas eget felis id orci ultricies frin gilla. Aliquam suscipit enim felis. Praesent arcu dui, rutrum et molestie sed, volutpat auctor lorem. Fusce sit amet libero odio. Integer sed nisl turpis. Integer mollis sed est eget convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
<p class="mb-5">Fusce elementum placerat tellus id. Nulla sit amet pretium enim, in vehicula ligula. Proin nec malesuada liberoque blandit. Sed condimentum neque ligula, id dapibus enim ornare id. Duis porttitor, risus vehicula convallis sagittis, ligula nisi iaculis libero, sit amet convallis nulla magna non tortor.</p>
<h2 class="w-full float-left text-xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">Live as if you were to die tomorrow.</h2>
<p class="mb-5">Nullam ut tempus mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus libero dolor, condimentum eu augue et, placerat tempus risus. Quisque massa purus, ullamcorper eget ipsum et, eleifend suscipit mi. Duis auctor tortor a dui accumsan, sed semper nunc iaculis.</p>
<figure class="lg:float-right text-center lg:text-right mr-0 lg:-mr-4 ml-7 mb-7"><img class="max-w-full h-auto mx-auto" src="http://127.0.0.1:8000/templates/tailnews/img/dummy/post3.jpg" alt="Image description">
<figcaption>Align right images</figcaption>
</figure>
<p class="mb-5">Mauris eget lectus et nisi commodo tristique. Aenean eget ornare dui. Maecenas bibendum lacus ante, vitae pellentesque ex elementum convallis.</p>
<p class="mb-5">Mauris lobortis leo a neque congue, quis pretium libero efficitur. Sed congue ipsum ac mollis egestas. Sed venenatis nisl nibh, in blandit nisi varius sed. Pellentesque molestie lacus ut justo molestie tristique. Curabitur pretium ipsum ex, a rhoncus arcu tempus ut. Fusce elementum placerat tellus id blandit.</p>
<p class="mb-5">Sed condimentum neque ligula, id dapibus enim ornare id. Duis porttitor, risus vehicula convallis sagittis, ligula nisi iaculis libero.</p>
<p class="mb-5">Morbi at lacinia risus. Donec vitae justo sed augue sollicitudin dignissim ut vitae ipsum. Proin at imperdiet ante, non blandit mauris. Nullam eu lobortis justo.</p>
<p class="mb-5">Fusce vestibulum blandit justo non rhoncus. Maecenas eget felis id orci ultricies frin gilla. Aliquam suscipit enim felis. Praesent arcu dui, rutrum et molestie sed, volutpat auctor lorem. Fusce sit amet libero odio. Integer sed nisl turpis. Integer mollis sed est eget convallis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 26,
                'group' => 'Acerca de',
            ),
            27 => 
            array (
                'id' => 33,
                'key' => 'politicas-de-privacidad.policies-privacy',
                'display_name' => 'Políticas de privacidad',
                'value' => '<p>Bienvenido/a a <strong>Laravel News,</strong>&nbsp;Nos comprometemos a proteger la privacidad de nuestros usuarios y visitantes. Esta Pol&iacute;tica de Privacidad describe c&oacute;mo recopilamos, utilizamos y compartimos informaci&oacute;n personal cuando usted visita nuestro sitio web.</p>
<p><strong>1. Informaci&oacute;n que Recopilamos:</strong></p>
<p>a. <strong>Informaci&oacute;n Personal:</strong></p>
<ul>
<li>Al registrarse o utilizar ciertas funciones de nuestro sitio, podemos recopilar informaci&oacute;n personal como su nombre, direcci&oacute;n de correo electr&oacute;nico, y otros datos relevantes.</li>
</ul>
<p>b. <strong>Informaci&oacute;n Autom&aacute;tica:</strong></p>
<ul>
<li>Recopilamos autom&aacute;ticamente informaci&oacute;n sobre su dispositivo y la forma en que utiliza nuestro sitio, incluyendo su direcci&oacute;n IP, tipo de navegador, p&aacute;ginas visitadas y el tiempo de visita.</li>
</ul>
<p><strong>2. Uso de la Informaci&oacute;n:</strong></p>
<p>a. Utilizamos la informaci&oacute;n recopilada para proporcionar y mejorar nuestros servicios, personalizar su experiencia, enviarle actualizaciones y noticias relevantes, as&iacute; como para cumplir con las obligaciones legales.</p>
<p><strong>3. Cookies y Tecnolog&iacute;as Similares:</strong></p>
<p>a. Utilizamos cookies y otras tecnolog&iacute;as similares para mejorar la experiencia del usuario, analizar patrones de tr&aacute;fico y personalizar contenido. Puede gestionar las preferencias de cookies a trav&eacute;s de la configuraci&oacute;n de su navegador.</p>
<p><strong>4. Compartir Informaci&oacute;n:</strong></p>
<p>a. No vendemos ni compartimos su informaci&oacute;n personal con terceros no afiliados sin su consentimiento, excepto cuando sea necesario para cumplir con la ley o proteger nuestros derechos.</p>
<p><strong>5. Enlaces a Terceros:</strong></p>
<p>a. Nuestro sitio puede contener enlaces a sitios web de terceros. No nos hacemos responsables de las pr&aacute;cticas de privacidad de dichos sitios y le recomendamos revisar sus pol&iacute;ticas de privacidad.</p>
<p><strong>6. Seguridad:</strong></p>
<p>a. Implementamos medidas de seguridad para proteger su informaci&oacute;n personal. Sin embargo, ning&uacute;n sistema es completamente seguro, y no podemos garantizar la seguridad absoluta de la informaci&oacute;n transmitida a trav&eacute;s de Internet.</p>
<p><strong>7. Cambios en la Pol&iacute;tica de Privacidad:</strong></p>
<p>a. Nos reservamos el derecho de actualizar esta Pol&iacute;tica de Privacidad en cualquier momento. Cualquier cambio ser&aacute; notificado mediante la publicaci&oacute;n de la versi&oacute;n actualizada en nuestro sitio web.</p>
<p><strong>8. Consentimiento:</strong></p>
<p>a. Al utilizar nuestro sitio web, usted acepta los t&eacute;rminos de esta Pol&iacute;tica de Privacidad.</p>
<p><strong>9. Preguntas y Contacto:</strong></p>
<p>a. Si tiene alguna pregunta sobre esta Pol&iacute;tica de Privacidad o nuestras pr&aacute;cticas de privacidad, no dude en ponerse en contacto con nosotros a trav&eacute;s de desarrollocreativodev@gmail.com.</p>
<p>Gracias por confiar en <strong>Laravel News</strong>. Nos esforzamos por ofrecerle la mejor experiencia posible mientras protegemos su privacidad.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 27,
                'group' => 'Políticas de privacidad',
            ),
            28 => 
            array (
                'id' => 34,
                'key' => 'politicas-de-privacidad.date',
                'display_name' => 'Fecha de entrada en vigencia',
                'value' => '28 de Enero de 2024',
                'details' => NULL,
                'type' => 'text',
                'order' => 28,
                'group' => 'Políticas de privacidad',
            ),
            29 => 
            array (
                'id' => 35,
                'key' => 'terminos-de-uso.terms-use',
                'display_name' => 'Terminos de uso',
                'value' => '<p>Le damos la bienvenida a <strong>Laravel News,</strong> al acceder y utilizar nuestro sitio web, usted acepta cumplir con los siguientes T&eacute;rminos de Uso. Si no est&aacute; de acuerdo con alguno de estos t&eacute;rminos, le recomendamos que no utilice nuestro sitio.</p>
<p><strong>1. Uso del Sitio:</strong></p>
<p>a. Usted se compromete a utilizar nuestro sitio web de manera conforme a la ley y de acuerdo con estos T&eacute;rminos de Uso.</p>
<p>b. No debe utilizar nuestro sitio de manera que pueda da&ntilde;ar, deshabilitar, sobrecargar o deteriorar el funcionamiento del mismo.</p>
<p><strong>2. Contenido del Sitio:</strong></p>
<p>a. El contenido de nuestro sitio, incluyendo noticias, art&iacute;culos, im&aacute;genes y otros materiales, es proporcionado &uacute;nicamente con fines informativos. No garantizamos la exactitud, integridad o actualidad de dicho contenido.</p>
<p>b. Nos reservamos el derecho de modificar, eliminar o actualizar el contenido de nuestro sitio en cualquier momento sin previo aviso.</p>
<p><strong>3. Registro y Cuenta de Usuario:</strong></p>
<p>a. Al registrarse en nuestro sitio, usted es responsable de proporcionar informaci&oacute;n precisa y actualizada. Debe mantener la confidencialidad de su cuenta y notificarnos de inmediato cualquier uso no autorizado.</p>
<p><strong>4. Comentarios y Contribuciones de Usuarios:</strong></p>
<p>a. Al comentar o contribuir con contenido en nuestro sitio, usted se compromete a no publicar material difamatorio, ofensivo, ilegal o que viole los derechos de terceros.</p>
<p><strong>5. Propiedad Intelectual:</strong></p>
<p>a. Todos los derechos de propiedad intelectual sobre el contenido de nuestro sitio son propiedad de <strong>Laravel News</strong> o de terceros con licencia. No est&aacute; permitido el uso no autorizado de este contenido.</p>
<p><strong>6. Enlaces a Terceros:</strong></p>
<p>a. Nuestro sitio puede contener enlaces a sitios web de terceros. No nos hacemos responsables de la exactitud, contenido o pr&aacute;cticas de privacidad de dichos sitios.</p>
<p><strong>7. Limitaci&oacute;n de Responsabilidad:</strong></p>
<p>a. No somos responsables de da&ntilde;os directos, indirectos, incidentales, consecuentes o especiales que puedan surgir del uso o incapacidad para utilizar nuestro sitio.</p>
<p><strong>8. Cambios en los T&eacute;rminos de Uso:</strong></p>
<p>a. Nos reservamos el derecho de actualizar o modificar estos T&eacute;rminos de Uso en cualquier momento. El uso continuado de nuestro sitio despu&eacute;s de la publicaci&oacute;n de cambios constituye su aceptaci&oacute;n de los mismos.</p>
<p><strong>9. Ley Aplicable:</strong></p>
<p>a. Estos T&eacute;rminos de Uso se rigen por las leyes vigentes en Bolivia. Cualquier disputa relacionada con estos t&eacute;rminos estar&aacute; sujeta a la jurisdicci&oacute;n exclusiva de los tribunales de La Sant&iacute;sima Trinidad.</p>
<p>Gracias por utilizar <strong>Laravel News</strong>. Le instamos a revisar regularmente estos T&eacute;rminos de Uso para estar informado sobre cualquier cambio. Si tiene preguntas o inquietudes, cont&aacute;ctenos a trav&eacute;s de desarrollocreativodev@gmail.com.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 29,
                'group' => 'Terminos de uso',
            ),
            30 => 
            array (
                'id' => 36,
                'key' => 'terminos-de-uso.date',
                'display_name' => 'Fecha de entrada en vigencia',
                'value' => '28 de Enero de 2024',
                'details' => NULL,
                'type' => 'text',
                'order' => 30,
                'group' => 'Terminos de uso',
            ),
        ));
        
        
    }
}