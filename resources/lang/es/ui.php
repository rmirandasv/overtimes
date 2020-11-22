<?php

return [

    'users' => [
        'index' => [
            'windowtitle' => 'Usuarios',
            'table' => [
                'name' => 'Nombre',
                'username' => 'Usuario',
                'active' => 'Activo',
                'locked' => 'Bloqueado',
                'createdAt' => 'Creado',
                'updatedAt' => 'Actualizado'
            ]
        ],
        'aside' => [
            'users' => [
                'users' => 'Usuarios',
                'create' => 'Crear usuario'
            ]
        ]
    ],

    'dashboard' => [
        'index' => [
            'windowtitle' => 'Dashboard'
        ]
    ],

    'overtimes' => [
        'index' => [
            'windowtitle' => 'Horas Extra'
        ]
    ],

    'config' => [
        'index' => [
            'windowtitle' => 'Configuración'
        ]
    ],

    'arialabel' => [
        'navbar'=> [
            'mainnavigation' => 'Navegación principal'
        ]
    ],

    'navbar' => [
        'users' => [
            'users' => 'Usuarios',
        ],
        'overtimes' => [
            'overtimes' => 'Horas Extra'
        ],
        'config' => [
            'config' => 'Configuración'
        ],
        'dashboard' => 'Dashboard'
    ],

    'breadcrumbs' => [
        'users' => [
            'users' => 'Usuarios'
        ],
        'dashboard' => [
            'dashboard' => 'Dashboard'
        ],
        'overtimes' => [
            'overtimes' => 'Horas Extra'
        ],
        'config' => [
            'config' => 'Configuración'
        ]
    ]

];