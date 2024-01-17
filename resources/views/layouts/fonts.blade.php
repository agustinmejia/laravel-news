{{-- Fuente --}}
@switch(setting('site.font'))
@case('Roboto')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-default: "Open Sans", sans-serif;
        }
    </style>
    @break
@case('Montserrat')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-default: "Montserrat", sans-serif;
        }
    </style>
    @break
@case('Lora')
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-default: "Lora", serif;
        }
    </style>
    @break
@case('Ubuntu')
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-default: "Ubuntu", sans-serif;
        }
    </style>
    @break
@case('Dosis')
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --font-default: "Dosis", sans-serif;
        }
    </style>
    @break
@case('Martel')
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Martel:wght@200;300;400;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <style>
            :root {
                --font-default: "Martel", sans-serif;
            }
        </style>
        @break
@default
    
@endswitch