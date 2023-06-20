<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */
?>
<?php if(!empty($_SESSION['is_logged'])): ?>

    <button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=edit&amp;id=<?=$oPost->id?>'" class="btn btn-info">Edit</button> 
    <form action="<?=ROOT_URL?>?p=blog&amp;a=delete&amp;id=<?=$oPost->id?>" method="post" class="inline">
    <button type="submit" name="delete" value="1" class="btn btn-danger">Delete</button></form>
    

<?php endif ?>
