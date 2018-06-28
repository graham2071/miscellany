<?php

return [
    'actions'       => [
        'add_appearance'    => 'Añadir apariencia',
        'add_personality'   => 'Añadir personalidad',
    ],
    'create'        => [
        'description'   => 'Crear nuevo personaje',
        'success'       => 'Se ha creado el personaje \':name\'.',
        'title'         => 'Nuevo Personaje',
    ],
    'destroy'       => [
        'success'   => 'Personaje \':name\' borrado.',
    ],
    'dice_rolls'    => [
        'hint'  => 'Se pueden asignar tiradas de dados a un personaje para usarlas en el juego.',
    ],
    'edit'          => [
        'description'   => 'Editar personaje',
        'success'       => 'Personaje \':name\' actualizado.',
        'title'         => 'Editar el personaje :name',
    ],
    'fields'        => [
        'age'                       => 'Edad',
        'eye'                       => 'Color de ojos',
        'family'                    => 'Familia',
        'fears'                     => 'Miedos',
        'free'                      => 'Texto libre',
        'goals'                     => 'Objetivos',
        'hair'                      => 'Pelo',
        'height'                    => 'Altura',
        'history'                   => 'Biografía',
        'image'                     => 'Imagen',
        'is_dead'                   => 'Muerto',
        'is_personality_visible'    => 'Personalidad visible',
        'languages'                 => 'Idiomas',
        'location'                  => 'Procedencia',
        'mannerisms'                => 'Manías',
        'name'                      => 'Nombre',
        'physical'                  => 'Físico',
        'race'                      => 'Raza',
        'relation'                  => 'Vínculo',
        'sex'                       => 'Sexo',
        'skin'                      => 'Piel',
        'title'                     => 'Título',
        'traits'                    => 'Personalidad',
        'type'                      => 'Tipo',
        'weight'                    => 'Peso',
    ],
    'helpers'       => [
        'free'  => '¿No encuentras el campo "Libre"? Si este personaje tenía uno, ha sido movido a la nueva pestaña de Notas.',
    ],
    'hints'         => [
        'hide_personality'          => 'Esta pestaña puede ocultarse a los usuarios no administradores desactivando la opción "Personalidad visible" en la edición del personaje.',
        'is_dead'                   => 'Este personaje está muerto',
        'is_personality_visible'    => 'Puedes ocultar a los Invitados la sección de personalidad.',
    ],
    'index'         => [
        'actions'       => [
            'random'    => 'Nuevo personaje aleatorio',
        ],
        'add'           => 'Nuevo Personaje',
        'description'   => 'Modificar los personajes de :name.',
        'header'        => 'Personajes en :name',
        'title'         => 'Personajes',
    ],
    'items'         => [
        'hint'  => 'A los personajes se les puede asignar objetos, que se mostrarán aquí.',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Añadir organización',
        ],
        'create'        => [
            'description'   => 'Asociar una organización a un personaje',
            'success'       => 'Personaje añadido a la organización.',
            'title'         => 'Nueva organización para :name',
        ],
        'destroy'       => [
            'success'   => 'Personaje borrado de la organización.',
        ],
        'edit'          => [
            'description'   => 'Actualizar la organización de un personaje',
            'success'       => 'Organización del personaje actualizada.',
            'title'         => 'Actualizar organización para :name',
        ],
        'fields'        => [
            'organisation'  => 'Organización',
            'role'          => 'Rol',
        ],
        'hint'          => 'Los personajes pueden formar parte de muchas organizaciones, que representan para quién trabajan o de qué sociedad secreta forman parte.',
        'placeholders'  => [
            'organisation'  => 'Elegir una organización',
        ],
    ],
    'placeholders'  => [
        'age'               => 'Edad',
        'appearance_entry'  => 'Descripción',
        'appearance_name'   => 'Pelo, Ojos, Piel, Altura...',
        'eye'               => 'Color de ojos',
        'family'            => 'Por favor selecciona un personaje',
        'fears'             => 'Miedos',
        'free'              => 'Observaciones',
        'goals'             => 'Objetivos',
        'hair'              => 'Pelo',
        'height'            => 'Altura',
        'history'           => 'Biografía',
        'image'             => 'Imagen',
        'languages'         => 'Idiomas',
        'location'          => 'Selecciona una procedencia',
        'mannerisms'        => 'Manías',
        'name'              => 'Nombre',
        'personality_entry' => 'Detalles',
        'personality_name'  => 'Objetivos, Manías, Miedos, Lazos...',
        'physical'          => 'Físico',
        'race'              => 'Raza',
        'sex'               => 'Sexo',
        'skin'              => 'Piel',
        'title'             => 'Título',
        'traits'            => 'Personalidad',
        'type'              => 'PNJ, Personaje Jugador, Divinidad...',
        'weight'            => 'Peso',
    ],
    'sections'      => [
        'appearance'    => 'Apariencia',
        'general'       => 'Información general',
        'history'       => 'Biografía',
        'personality'   => 'Personalidad',
    ],
    'show'          => [
        'description'   => 'Vista detallada del personaje',
        'tabs'          => [
            'attributes'    => 'Atributos',
            'dice_rolls'    => 'Tiradas de dados',
            'free'          => 'Observaciones',
            'history'       => 'Biografía',
            'items'         => 'Objetos',
            'organisations' => 'Organizaciones',
            'personality'   => 'Personalidad',
            'relations'     => 'Vínculos',
        ],
        'title'         => 'Personaje :name',
    ],
];
