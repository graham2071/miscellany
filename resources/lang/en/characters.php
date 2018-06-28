<?php

return [
    'actions'       => [
        'add_appearance'    => 'Add an appearance',
        'add_personality'   => 'Add a personality',
    ],
    'create'        => [
        'description'   => 'Create a new character',
        'success'       => 'Character \':name\' created.',
        'title'         => 'New Character',
    ],
    'destroy'       => [
        'success'   => 'Character \':name\' removed.',
    ],
    'dice_rolls'    => [
        'hint'  => 'Dice rolls can be assigned to a character for in game usage.',
    ],
    'edit'          => [
        'description'   => 'Edit a character',
        'success'       => 'Character \':name\' updated.',
        'title'         => 'Edit Character :name',
    ],
    'fields'        => [
        'age'                       => 'Age',
        'eye'                       => 'Eye colour',
        'family'                    => 'Family',
        'fears'                     => 'Fears',
        'free'                      => 'Free text',
        'goals'                     => 'Goals',
        'hair'                      => 'Hair',
        'height'                    => 'Height',
        'history'                   => 'History',
        'image'                     => 'Image',
        'is_dead'                   => 'Dead',
        'is_personality_visible'    => 'Personality visible',
        'languages'                 => 'Languages',
        'location'                  => 'Location',
        'mannerisms'                => 'Mannerisms',
        'name'                      => 'Name',
        'physical'                  => 'Physical',
        'race'                      => 'Race',
        'relation'                  => 'Relation',
        'sex'                       => 'Sex',
        'skin'                      => 'Skin',
        'title'                     => 'Title',
        'traits'                    => 'Traits',
        'type'                      => 'Type',
        'weight'                    => 'Weight',
    ],
    'helpers'       => [
        'free'  => 'Where did the "Free" field go? If this character had one, it\'s been moved over to the new Notes tab!',
    ],
    'hints'         => [
        'hide_personality'          => 'This tab can be hidden from non "Admin" users by disabling the "Personality Visible" option when editing this character.',
        'is_dead'                   => 'This character is dead',
        'is_personality_visible'    => 'You can hide the whole personality section from non "Admin" users.',
    ],
    'index'         => [
        'actions'       => [
            'random'    => 'New Random Character',
        ],
        'add'           => 'New Character',
        'description'   => 'Manage the characters of :name.',
        'header'        => 'Characters in :name',
        'title'         => 'Characters',
    ],
    'items'         => [
        'hint'  => 'Items can be assigned to characters and will be displayed here.',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Add organisation',
        ],
        'create'        => [
            'description'   => 'Associate an organisation to a character',
            'success'       => 'Character added to organisation.',
            'title'         => 'New Organisation for :name',
        ],
        'destroy'       => [
            'success'   => 'Character organisation removed.',
        ],
        'edit'          => [
            'description'   => 'Update a character\'s organisation',
            'success'       => 'Character organisation updated.',
            'title'         => 'Update Organisation for :name',
        ],
        'fields'        => [
            'organisation'  => 'Organisation',
            'role'          => 'Role',
        ],
        'hint'          => 'Characters can be part of many organisations, representing who they work for or what secret society they are part of.',
        'placeholders'  => [
            'organisation'  => 'Choose an organisation...',
        ],
    ],
    'placeholders'  => [
        'age'               => 'Age',
        'appearance_entry'  => 'Description',
        'appearance_name'   => 'Hair, Eyes, Skin, Height',
        'eye'               => 'Eye colour',
        'family'            => 'Please select a character',
        'fears'             => 'Fears',
        'free'              => 'Free text',
        'goals'             => 'Goals',
        'hair'              => 'Hair',
        'height'            => 'Height',
        'history'           => 'History',
        'image'             => 'Image',
        'languages'         => 'Languages',
        'location'          => 'Please select a location',
        'mannerisms'        => 'Mannerisms',
        'name'              => 'Name',
        'personality_entry' => 'Details',
        'personality_name'  => 'Goals, Mannerisms, Fears, Bonds',
        'physical'          => 'Physical',
        'race'              => 'Race',
        'sex'               => 'Sex',
        'skin'              => 'Skin',
        'title'             => 'Title',
        'traits'            => 'Traits',
        'type'              => 'NPC, Player Character, Deity',
        'weight'            => 'Weight',
    ],
    'sections'      => [
        'appearance'    => 'Appearance',
        'general'       => 'General information',
        'history'       => 'History',
        'personality'   => 'Personality',
    ],
    'show'          => [
        'description'   => 'A detailed view of a character',
        'tabs'          => [
            'dice_rolls'    => 'Dice Rolls',
            'free'          => 'Free Text',
            'history'       => 'History',
            'items'         => 'Items',
            'organisations' => 'Organisations',
            'personality'   => 'Personality',
        ],
        'title'         => 'Character :name',
    ],
];
