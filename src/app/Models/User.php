<?php

namespace App\Models;

use App\Model;

class User extends Model
{

    public function create(string $email, string $name, bool $isActive = true): int
    {

        try {

            $stmt = $this->db->prepare('INSERT INTO users (email,full_name,is_active,created_at)
        VALUES(?,?,1,NOW())'
            );

            $stmt->execute([$email, $name]);

        } catch (\PDOException $e) {

            echo "Email address not available <br>";
        }
        return (int) $this->db->lastInsertId();

    }

}
