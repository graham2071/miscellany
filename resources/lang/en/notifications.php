<?php

return [
    'campaign'          => [
        'join'  => ':user joined the campaign :campaign.',
        'leave' => ':user left the campaign :campaign.',
    ],
    'header'            => 'You have :count notifications',
    'index'             => [
        'description'   => 'Your latest notifications.',
        'title'         => 'Notifications',
    ],
    'no_notifications'  => 'There are currently no notifications.',
    'permissions'       => [
        'body'  => 'Hey, we want to let you know that we\'ve completely changed the permissions system for each campaign!</p><p>Campaigns can now have roles, and each role can have permissions to access, edit or delete entities. Each entity can also be fine-tuned with user-specific permissions, meaning Becky and Alfred can edit their own characters!</p><p>The only downside is that campaigns with several users will have to set their new permissions. If you are the Admin of a campaign, you can do that in the campaign management page. If you are part of a campaign, you won\'t see anything until the owner has taken care of it.',
        'title' => 'Permission Changes',
    ],
];
