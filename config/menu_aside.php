<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => 'administrator/dashboard',
            'new-tab' => false,
        ],

        // Layout
        [
            'section' => 'Accounts Management',
        ],
        [
            'title' => 'Users Page',
            'icon' => 'media/svg/icons/Design/PenAndRuller.svg',
            'root' => true,
            'bullet' => 'dot',
            'page' => 'administrator/user-page',
            'new-tab' => false
        ],
        [
            'title' => 'Users Performance',
            'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
            'bullet' => 'dot',
            'root' => true,
            'page' => 'administrator/department-list-page',
            'new-tab' => false,
        ],

        // Events Management
        [
            'section' => 'Events Management',
        ],
        [
            'title' => 'Event List',
            'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
            'bullet' => 'dot',
            'root' => true,
            'page' => 'administrator/event-management-page',
            'new-tab' => false,
        ],

    ]

];
