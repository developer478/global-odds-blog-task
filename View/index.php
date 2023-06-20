<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */

?>
<?php require 'inc/header.php' ?>



    <div class="container">

        <div class="col-md-12 mt-4">
            <h1>Blog Post 
            
            <button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="float-right btn btn-primary">Add New Post</button>
            </h1>
            <hr>

            <?php if (empty($this->oPosts)): ?>
                <p class="bold">There is no Blog Post.</p>
                <p><button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="bold">What's on your mind. Post it!</button></p>
            <?php else: ?>

            <?php foreach ($this->oPosts as $oPost): ?>
                <h3><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>"><?=htmlspecialchars($oPost->title)?></a></h3>
                <p>Posted <?=$oPost->createdDate?></p>
                <p><?=nl2br(htmlspecialchars(mb_strimwidth($oPost->body, 0, 100, '...')))?></p>
                <p><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>">View more</a></p>
                <div class="mr-r-0"><?php require 'inc/control_buttons.php' ?></div>
                <hr>
            <?php endforeach ?>
            </div>
        </div>
        <?php endif ?>
    </div>



<?php require 'inc/footer.php' ?>
