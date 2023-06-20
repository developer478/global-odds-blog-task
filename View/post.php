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
        <h1>Blog Post Detail</h1>
        <?php if (empty($this->oPost)): ?>
        <p class="error">The post can't be be found!</p>
        <?php else: ?>
            <article>
                <time datetime="<?=$this->oPost->createdDate?>" pubdate="pubdate"></time>
                <h5><?=htmlspecialchars($this->oPost->title)?></h5>
                <p class="">Created on <?=$this->oPost->createdDate?></p>
                <p><?=nl2br(htmlspecialchars($this->oPost->body))?></p>
                <?php $oPost = $this->oPost;
                require 'inc/control_buttons.php';
                ?>
            </article>


            <!--- \\\\\\\Post Comment form-->
            <?php require 'inc/post/comment/form.php';?>

            <!--- \\\\\\\Post Comments-->
            <?php require 'inc/post/comment/listing.php';?>
            
        <?php endif ?>
    </div>    
</div>    



<?php require 'inc/footer.php' ?>
