<?php

return [
    ''                       => [
        'controller' => 'main',
        'action'     => 'index'
    ],
    'page/{page:\d+}'        => [
        'controller' => 'main',
        'action'     => 'index'
    ],
    'show/{id:\d+}'          => [
        'controller' => 'article',
        'action'     => 'show'
    ],
    'add'                    => [
        'controller' => 'article',
        'action'     => 'add'
    ],
    'getComments/{id:\d+}' => [
        'controller' => 'article',
        'action'     => 'getComments'
    ],
    'addComment/{id:\d+}'    => [
        'controller' => 'article',
        'action'     => 'addComment'
    ],
    'deleteComment/{id:\d+}' => [
        'controller' => 'article',
        'action'     => 'deleteComment'
    ],
    'addLike/{id:\d+}'       => [
        'controller' => 'article',
        'action'     => 'addLike'
    ],
    'addDislike/{id:\d+}'    => [
        'controller' => 'article',
        'action'     => 'addDislike'
    ],
    'edit/{id:\d+}'          => [
        'controller' => 'article',
        'action'     => 'edit'
    ],
    'delete/{id:\d+}'        => [
        'controller' => 'article',
        'action'     => 'delete'
    ],
    'signin'                 => [
        'controller' => 'account',
        'action'     => 'signin'
    ],
    'signup'                 => [
        'controller' => 'account',
        'action'     => 'signup'
    ],
    'signout'                => [
        'controller' => 'account',
        'action'     => 'signout'
    ]
];