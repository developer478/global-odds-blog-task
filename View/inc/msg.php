<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */
?>

<div class="container">
	
    <div class="alert-group mt-4">
        <?php if (!empty($this->sSuccMsg)): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Well done!</strong> <?=$this->sSuccMsg?>
        </div>
        <?php endif ?>

        <?php if (!empty($this->sErrMsg)): ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong>Oh snap!</strong> <?=$this->sErrMsg?>
        </div>
        <?php endif ?>
    </div>
</div>
