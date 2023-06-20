<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */
?>
<?php foreach ($this->oComments as $comment): ?>
    <div class="card gedf-card mt-5">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                </div>
                <div class="ml-2">
                    <div class="h5 m-0">@<?= $comment->user_name?></div>
                    <div class="h7 text-muted">Miracles Lee Cross</div>
                </div>
            </div>
            <div>
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-h"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                        <a class="dropdown-item" href="#">Delete</a>
                        <a class="dropdown-item" href="#">Edit</a>
                        <a class="dropdown-item" href="#">Report</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> <?= date("F d Y",strtotime($comment->createdAt))?></div>
        <p class="card-text">
        <?= $comment->body?>
        </p>
    </div>
    <div class="card-footer">
        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Reply</a>
    </div>
</div>
<?php endforeach ?>