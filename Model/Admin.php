<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */

namespace JamBlog\Model;

class Admin extends Blog
{
    public function login($sEmail)
    {
        $oStmt = $this->oDb->prepare('SELECT email, password FROM Admins WHERE email = :email LIMIT 1');
        $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
        $oStmt->execute();
        $oRow = $oStmt->fetch(\PDO::FETCH_OBJ);

        return @$oRow->password; // Use the PHP 8.0 password function
    }
}
