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
        [
            'id' => 1,
            'key' => 'activo',
        ],
        [
            'id' => 2,
            'key' => 'inactivo',
        ],
        [
            'id' => 3,
            'key' => 'eliminado'
        ]
    ],
    'payment_concepts' => [
        [
            'id' => 1,
            'key' => 'Cuota Mensual'
        ],
        [
            'id' => 2,
            'key' => 'Aportacion Especial'
        ],
        [
            'id' => 3,
            'key' => 'Multa'
        ],
    ]
];