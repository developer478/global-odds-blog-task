<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */

/** Allows to create an admin password easily **/
/* I use PHP 8.0 password hashing for this app test. Thanks this new PHP feature,
the password gets a salt and it is much more secure than a simple SHA1 algorithm */

$sPwd = 'pwd123'; // Admin Password
$sHashedPwd = password_hash($sPwd , PASSWORD_BCRYPT, array('cost' => 14));
echo 'Password is: ' . $sHashedPwd;
