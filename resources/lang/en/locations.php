<?php

return [
    'characters'    => [
        'description'   => 'Characters located at the location.',
        'title'         => 'Location :name Characters',
    ],
    'create'        => [
        'description'   => 'Create a new location',
        'success'       => 'Location \':name\' created.',
        'title'         => 'New Location',
    ],
    'destroy'       => [
        'success'   => 'Location \':name\' removed.',
    ],
    'edit'          => [
        'success'   => 'Location \':name\' updated.',
        'title'     => 'Edit Location :name',
    ],
    'events'        => [
        'description'   => 'Events which took place at the location.',
        'title'         => 'Location :name Events',
    ],
    'fields'        => [
        'characters'    => 'Characters',
        'image'         => 'Image',
        'is_map_private' => 'Private Map',
        'location'      => 'Location',
        'locations'     => 'Locations',
        'map'           => 'Map',
        'name'          => 'Name',
        'relation'      => 'Relation',
        'type'          => 'Type',
    ],
    'helpers'       => [
        'characters'    => 'View all characters in this location and its children locations, or just those directly located here.',
        'descendants'   => 'This list contains all locations which are descendants of this location, not only those directly under it.',
        'nested'        => 'When in Nested View, you can view your locations in a nested manner. Locations with no parent location will be shown by default. Locations with children locations can be clicked to view those children. You can keep clicking until there are no more children to view.',
        'map' => 'Adding a map to a location will allow you to place "Points" on the map, linking to other Entities in the campaign.',
    ],
    'hints' => [
        'is_map_private' => 'A private map will only be visible to members of the campaign\'s "Admin" role.'
    ],
    'index'         => [
        'actions'       => [
            'explore_view'  => 'Nested View',
        ],
        'add'           => 'New Location',
        'description'   => 'Manage the location of :name.',
        'header'        => 'Locations in :name',
        'title'         => 'Locations',
    ],
    'items'         => [
        'description'   => 'Items located in or from the location.',
        'title'         => 'Location :name Items',
    ],
    'journals'      => [
        'description'   => 'Journals that were written in the location.',
        'title'         => 'Location :name Journals',
    ],
    'locations'     => [
        'description'   => 'Locations located in the location.',
        'title'         => 'Location :name Locations',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'    => 'Enable Edit Mode',
            'big'           => 'Full View',
            'download'      => 'Download',
            'points'        => 'Edit Points',
            'toggle_hide'   => 'Hide Points',
            'toggle_show'   => 'Show Points',
            'view_mode'     => 'Back to View Mode',
            'zoom_in'       => 'Zoom In',
            'zoom_out'      => 'Zoom Out',
            'zoom_reset'    => 'Zoom Reset',
        ],
        'helper'    => 'Click on the map to add a new point to a location, or click on an existing point to change or delete it.',
        'helpers'   => [
            'admin' => 'Activate to enable clicking anywhere on the map to add new points, clicking on points to edit them, or moving them around.',
            'label' => 'This point is a label. Nothing more, nothing less.',
            'view'  => 'Click on any map point to view details about it. Use Ctrl+Zoom to zoom in an out of the map.',
            'info' => 'More info about maps.',
        ],
        'modal'     => [
            'submit'    => 'Add',
            'title'     => 'Target of new point',
        ],
        'no_map'    => 'You can upload a map to this location when editing it. Once a map has been provided, it will appear here.',
        'points'    => [
            'fields'        => [
                'axis_x'    => 'X Axis',
                'axis_y'    => 'Y Axis',
                'colour'    => 'Background colour',
                'icon'      => 'Icon',
                'name'      => 'Label',
                'shape'     => 'Shape',
                'size'      => 'Size',
            ],
            'helpers'       => [
                'location_or_name'  => 'A map point can either point to an existing Entity, or just have a label.',
            ],
            'icons'         => [
                'anchor'        => 'Anchor',
                'anvil'         => 'Anvil',
                'apple'         => 'Apple',
                'aura'          => 'Aura',
                'axe'           => 'Axe',
                'beer'          => 'Beer',
                'biohazard'     => 'Biohazard',
                'book'          => 'Book',
                'bridge'        => 'Bridge',
                'campfire'      => 'Campfire',
                'candle'        => 'Candle',
                'cat'           => 'Cat',
                'cheese'        => 'Cheese',
                'cog'           => 'Cog',
                'crown'         => 'Crown',
                'dead-tree'     => 'Dead Tree',
                'diamond'       => 'Diamond',
                'dragon'        => 'Dragon',
                'emerald'       => 'Emerald',
                'entity'        => 'Target Entity Image',
                'fire'          => 'Fire',
                'flask'         => 'Flask',
                'flower'        => 'Flower',
                'horseshoe'     => 'Horseshoe',
                'hourglass'     => 'Hourglass',
                'hydra'         => 'Hydra',
                'kaleidoscope'  => 'Kaleidoscope',
                'key'           => 'Key',
                'lever'         => 'Lever',
                'meat'          => 'Meat',
                'octopus'       => 'Octopus',
                'palm-tree'     => 'Palm Tree',
                'pin'           => 'Pin',
                'pine-tree'     => 'Pine Tree',
                'player'        => 'Character',
                'potion'        => 'Potion',
                'reactor'       => 'Reactor',
                'repair'        => 'Repair',
                'sheep'         => 'Sheep',
                'shield'        => 'Shield',
                'skull'         => 'Skull',
                'snake'         => 'Snake',
                'spades-card'   => 'Spades Card',
                'sprout'        => 'Sprout',
                'sun'           => 'Sun',
                'tentacle'      => 'Tentacle',
                'toast'         => 'Toast',
                'tombstone'     => 'Tombstone',
                'torch'         => 'Torch',
                'tower'         => 'Tower',
                'water-drop'    => 'Water',
                'wooden-sign'   => 'Quest',
                'wrench'        => 'Wrench',
            ],
            'modal'         => 'Create or edit a map point',
            'placeholders'  => [
                'axis_x'    => 'Left position',
                'axis_y'    => 'Top position',
                'name'      => 'Label of the point when no location is provided.',
            ],
            'return'        => 'Back to :name',
            'shapes'        => [
                'circle'    => 'Circle',
                'square'    => 'Square',
            ],
            'sizes'         => [
                'large'     => 'Large',
                'huge'      => 'Huge',
                'small'     => 'Small',
                'standard'  => 'Standard',
                'tiny'      => 'Tiny',
            ],
            'success'       => [
                'create'    => 'Location Map Point created.',
                'delete'    => 'Location Map Point removed.',
                'update'    => 'Location Map Point updated.',
            ],
            'title'         => 'Location :name Map Points',
        ],
        'success'   => 'Map Points saved.',
    ],
    'organisations' => [
        'description'   => 'Organisations situated in the location.',
        'title'         => 'Location :name Organisations',
    ],
    'panels' => [
        'map' => 'Map',
    ],
    'placeholders'  => [
        'location'  => 'Choose a parent location',
        'name'      => 'Name of the location',
        'type'      => 'City, Kingdom, Ruin',
    ],
    'quests'        => [
        'description'   => 'Quests the location is a part of.',
        'title'         => 'Location :name Quests',
    ],
    'show'          => [
        'description'   => 'A detailed view of a location',
        'tabs'          => [
            'characters'    => 'Characters',
            'events'        => 'Events',
            'information'   => 'Information',
            'items'         => 'Items',
            'journals'      => 'Journals',
            'locations'     => 'Locations',
            'map'           => 'Map',
            'menu'          => 'Menu',
            'organisations' => 'Organisations',
            'quests'        => 'Quests',
        ],
        'title'         => 'Location :name',
    ],
];
