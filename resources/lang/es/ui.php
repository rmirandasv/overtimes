<?php

return [

    'users' => [

        'index' => [
            'windowtitle' => 'Usuarios',
            'header' => 'Usuarios',
            'table' => [
                'name' => 'Nombre',
                'username' => 'Usuario',
                'active' => 'Activo',
                'locked' => 'Bloqueado',
                'createdAt' => 'Creado',
                'updatedAt' => 'Actualizado',
                'unlocked'  => 'No bloqueado',
                'role'      => 'Rol'
            ]
        ],

        'create' => [
            'windowtitle' => 'Crear Usuario',
            'form' => [
                'name' => 'Nombre',
                'last_name' => 'Apellido',
                'username' => 'Usuario',
                'password' => 'Contraseña',
                'empty_roles' => 'No existen roles creados',
                'role' => 'Rol',
                'placeholder' => [
                    'name' => 'Nombre',
                    'last_name' => 'Apellido',
                    'username' => 'Usuario de inicio de sesión',
                    'password' => 'Contraseña'
                ]
            ]
        ],

        'edit' => [
            'windowtitle' => 'Editar usuario',
            'form' => [
                'passwordblank' => 'Dejar en blanco sino se desea cambiar la contraseña.'
            ]
        ],

        'delete' => [
            'windowtitle' => 'Eliminar usuario'
        ],

        'aside' => [
            'users' => [
                'users' => 'Usuarios',
                'create' => 'Crear usuario',
                'edit'      => 'Editar usuario',
                'delete' => 'Eliminar usuario'
            ]
        ],

        'actions' => [
            'disable' => 'Usuario activo. Toca para desactivar.',
            'enable' => 'Usuario desactivado. Toca para activar.',
            'locked' => 'Usuario bloqueado. Toca para desbloquear.',
            'unlock' => 'Usuario Bloqueado. Presiona para desbloquear.'
        ]

    ],

    'dashboard' => [
        'index' => [
            'windowtitle' => 'Dashboard'
        ]
    ],

    'overtimes' => [
        'index' => [
            'windowtitle' => 'Horas Extra',
            'table' => [
                'employee' => 'Empleado',
                'start_time' => 'Inicio',
                'finish_time' => 'Fin',
                'overtime_desc' => 'Descripción',
                'overtime_cost' => 'Costo',
                'overtime_cost' => 'Costo',
                'created_at' => 'Creado',
                'updated_at' => 'Actualizado',
                'lasted' => 'Duración',
                'empty' => 'No se encontraron horas extras registradas'
            ]
        ],
        'create' => [
            'windowtitle' => 'REgistrar horas extra',
            'form' => [
                'employee' => 'Empleado',
                'start_date' => 'Fecha / Hora inicio',
                'finish_date' => 'Fecha / Hora fin',
                'overtime_desc' => 'Descripción del trabajo'
            ]
        ],
        'aside' => [
            'all' => 'Todas las horas extra',
            'register' => 'Registrar'
        ]
    ],

    'login' => [
        'windowtitle' => 'Iniciar Sesión',
        'logout' => 'Salir',
        'form' => [
            'username' => 'Usuario',
            'password' => 'Contraseña'
        ]
    ],

    'config' => [

        'index' => [
            'windowtitle' => 'Configuración',
            'table' => [
                'config'
            ],
            'form' => [
                'public' => 'La configuración de pagos por hora extra es visible para empleados',
                'is_public' => 'Información de costos publica',
                'login_attemps' => 'Máximo de intentos de inicio de sesión antes de bloquear.'
            ]
        ],

        'tabs' => [
            'global' => 'Configuración Global',
            'costs' => 'Costos por hora extra'
        ],

        'costs' => [
            'windowtitle' => 'Costos por hora extra',
            'aside' => [
                'current' => 'Confguración actual',
                'create'  => 'Agregar costo'
            ],
            'table' => [
                'initial_minute' => 'Minuto inicial',
                'final_minute' => 'Minuto final',
                'cost' => 'Costo',
                'created_at' => 'Creado',
                'updated_at' => 'Actualizado',
                'empty' => 'No hay reglas de costos por hora extra que mostrar'
            ],
            'create' => [
                'windowtitle' => 'Crear regla de costo',
                'form' => [
                    'initial_minute' => 'Minuto inicial',
                    'final_minute' => 'Minuto final',
                    'cost' => 'Costo',
                    'crated_at' => 'Creado',
                    'updated_at' => 'Actualiado',
                    'placeholder' => [
                        'initial_minute' => 'Minuto inicial. Ejemplo: 30',
                        'final_minute' => 'Minuto final. Ejemplo: 60'
                    ]
                ]
            ]
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
            'users' => 'Usuarios',
            'create' => 'Crear usuario',
            'edit'  => 'Editar usuario',
            'delete' => 'Eliminar usuario'
        ],
        'dashboard' => [
            'dashboard' => 'Dashboard'
        ],
        'overtimes' => [
            'overtimes' => 'Horas Extra',
            'register'  => 'Registrar'
        ],
        'config' => [
            'config' => 'Configuración',
            'global' => 'Configuración Global',
            'costs' => 'Costos por hora extra',
            'addcost' => 'Registrar costo'
        ]
    ],

    'common' => [
        'actions' => [
            'edit' => 'Editar',
            'delete' => 'Eliminar',
            'save' => 'Guardar',
            'create' => 'Crear',
            'login' => 'Entrar'
        ]
    ],

    'security' => [
        'roles' => [
            'ADMIN' => 'Administrador',
            'EMPLOYEE' => 'Empleado'
        ]
    ],

    'messages' => [
        'users' => [
            'unlocked' => 'Usuario desbloqueado exitosamente.',
            'enabled' => 'Usuario activado nuevamente.',
            'disabled' => 'Usuario desactivado exitosamente.',
            'updated' => 'Usuario actualizado exitosamente.',
            'deleted' => 'Usuario eliminado exitosamente.',
            'create' => [
                'success' => 'Usuario creado exitosamente.'
            ],
        ],
        'config' => [
            'costs' => [
                'created' => 'Regla de costo de hora extra agregado exitosamente.'
            ]
        ],
        'overtimes' => [
            'created' => 'Tiempo de trabajo extra registrado con éxito.'
        ]
    ]

];