<?php
return [
    'users' => [
        'type' => [
            'admin' => ['value' => 1, 'string' => 'Administrador'],
            'directivo' => ['value' => 2, 'string' => 'Miembro Directivo'],
            'usuario' => ['value' => 3, 'string' => 'Usuario']
        ],
        'active' => [
            'active' => ['value' => true, 'string' => 'Activo'],
            'inactive' => ['value' => false, 'string' => 'Inactivo']
        ]
    ],
    'status' => [
        1 => [
            'id' => 1,
            'key' => 'activo',
        ],
        2 => [
            'id' => 2,
            'key' => 'inactivo',
        ],
        3 => [
            'id' => 3,
            'key' => 'eliminado'
        ]
    ]
];