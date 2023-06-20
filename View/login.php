<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */
?>
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<div class="container">

    <div class="col-md-12 mt-4">
        <h1>User Login</h1>
        <form action="" method="post" class="form">
            <p><label for="email">Email:</label><br />
                <input type="email" name="email" class="form-control" id="email" required="required" />
            </p>

            <p><label for="password">Password:</label><br />
                <input type="password" name="password" class="form-control" id="password" required="required" />
            </p>

            <p><input type="submit" class="btn btn-primary" value="Log In" /></p>
        </form>

    </div>    
</div>


<?php require 'inc/footer.php' ?>
