<?php

return [
    [
        'id' => 1,
        'firstName' => 'Alain',
        'creationDate' => '2024-04-02',
        'roles' => ['ROLE_USER'],
        'username' => 'alain',
        'password' => '$argon2id$v=19$m=65536,t=4,p=1$QTllVVpqVDBYUC4vdFhnbA$+2SKjkrLWtEjyIQfIoqwj6jhnTKqfCb582BNQfNMvCk',
    ],
    [
        'id' => 2,
        'firstName' => 'Sylvie',
        'creationDate' => '2024-04-02',
        'roles' => ['ROLE_USER', 'ROLE_ADMIN'],
        'username' => 'sylvie',
        'password' => '$argon2id$v=19$m=65536,t=4,p=1$N0pCSVZiVGpWb1dKbmFYTQ$zxfW6PVGc8h9y4OcJx0n6RzGQ31FY/vbdT/7IoxRx7k'
    ],
];
