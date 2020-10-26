<?php


namespace Core\Auth;


use Core\Database\Database;

class DBAuth
{
    /**
     * @var Database
     */
    private Database $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function login($username, $password): bool
    {
        $user = $this->db->prepare(
            'SELECT *
             FROM users u 
             WHERE u.username = ? ',
            [$username],
            null,
            true
        );

        var_dump($user);
    }
}