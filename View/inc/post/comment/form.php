<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */
?>
<?php if(!empty($_SESSION['is_logged'])): ?>

    <h1 class="mt-4"> Comment</h1>
    <!--- Post Form Begins -->
    <section class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                        a Post Comment</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form action="" method="post" class="form">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    
                        <div class="form-group">
                            <label class="sr-only" for="message">post</label>
                            <textarea name="body" class="form-control" id="message" required rows="3" placeholder="What are you thinking..."></textarea>
                        </div>

                    </div>
                </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" name="add_comment" value="post" />
                    <!-- <button type="submit" class="btn btn-primary" value="comment">share</button> -->
                </div>
            </form>
        </div>
    </section>
    <!--- Post Form Ends -->
    

<?php endif ?>
