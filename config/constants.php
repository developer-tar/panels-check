<?php
return [
    'company' => [
        'type' => [
            'LLC' => 1,
            'PVTLTD' => 2,
            'Coorportion' => 3,
        ]
    ],
    'status' => [
        'active' => 1,
        'non-active' => 0,
    ],
    'path' => [
        'image' => 1,
        'video' => 2,
        'pdf' => 3,
        'others' => 4,
    ],

    'country' => [
        'India' => 1,
        'USA' => 2,
        'UK' => 3,
        'Canada' => 4,
        'Australia' => 5,
    ],
    'gender' => [
        'Male' => 1,
        'Female' => 2,
        "Other" => 3,
    ],
    'roles' => [
        'ADMIN' => 1,
        'HR' => 2,
        'EMPLOYEE' => 3,
        'VENDOR' => 4,
    ],
    'roles_inverse' => [
        'admin' => 'ADMIN',
        'hr' => 'HR',
        'employee' => 'EMPLOYEE',
        'vendor' => 'VENDOR',
    ],
    'user_approval_status' => [
        'pending' => 1,
        'approved' => 2,
        'rejected' => 3,

    ],
    'user_approval_status_reverse' => [
        'PENDING' => 'pending',
        'APPROVED' => 'approved',
        'REJECTED' => 'rejected',

    ],

    'warning_messge' => [
        'login' => 'You must be logged in to access this area.',
        'permission' => 'You do not have permission to access this area.',
        'kyc' => [
            'approval' => 'User kyc approved successfully.',
            'rejected' => 'User kyc rejected successfully.'
        ],
        'status' => [
            'approval' => 'User  approved successfully.',
            'rejected' => 'User  rejected successfully.'
        ]
    ],

];
