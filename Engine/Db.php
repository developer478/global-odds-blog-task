<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */

namespace JamBlog\Engine;

class Db extends \PDO
{
    public function __construct()
    {

        try {
            $aDriverOptions[\PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES UTF8';
            parent::__construct('mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';', Config::DB_USR, Config::DB_PWD, $aDriverOptions);
            $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
