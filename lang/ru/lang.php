<?php return [
    'plugin' => [
        'name' => 'Иерархия Ролей',
        'description' => 'Управление доступом используя иерархические правила доступа',
    ],
    'fields' => [
        'name' => 'Имя',
        'parent' => 'Родитель',
        'role' => 'Роль',
        'permission' => 'Разрешение',
        'code' => 'Код',
        'empty' => ' - Нет - ',
        'anonymous_only' => 'Только для анонимов',
    ],
    'role' => [
        'label' => 'Роль',
    ],
    'toolbar' => [
        'comment' => 'Для редактирования роли нажмите на ее название в верхней части таблицы',
    ],
    'menu' => [
        'users' => 'Пользователи',
        'roles_h' => 'Иерархия Ролей',
        'permissions_h' => 'Иерархия Разрешений',
    ],
    'access' => [
        'label' => 'Доступ',
        'desc' => 'Управление доступом к страницам используя иерархию ролей и разрешений',
        'redirect_title' => 'Перенаправление для анонимов',
        'redirect_desc' => 'Страница куда перенаправлять анонимов при попытке открыть страницу для авторизированных пользователей',
        'redirect_auth_title' => 'Перенаправление для авторизированных',
        'redirect_auth_desc' => 'Страница куда перенаправлять авторизированных при попытке открыть страницу только для анонимов',
    ],
    'list' => [
        'roles' => 'Список ролей',
        'roles_assign' => 'Присвоение разрешений ролям',
    ],
    'comments' => [
        'anonymous_only' => 'Доступна только для неавторизированных пользователей',
    ],
];