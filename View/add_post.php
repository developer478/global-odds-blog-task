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
        <h1>Create Blog Post</h1>
        <form action="" method="post" class="form">

            <p><label for="title">Title:</label><br />
                <input type="text" class="form-control" name="title" id="title" required="required" />
            </p>

            <p><label for="body">Body:</label><br />
                <textarea name="body" id="body" class="form-control" rows="5" cols="35" required="required"></textarea>
            </p>

            <p><input type="submit" class="btn btn-primary" name="add_submit" value="Add" /></p>
        </form>
    </div>
</div>


<?php require 'inc/footer.php' ?>
