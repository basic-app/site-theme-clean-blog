<?php

helper(['language']);

?>
<div class="post-preview">
    <a href="<?= $url;?>">
        <h2 class="post-title"><?= esc($title);?></h2>
        <h3 class="post-subtitle"><?= esc($description);?></h3>
    </a>
    <?php if($created):?>
        <p class="post-meta">
            <?= lang('Posted on {created}', ['created' => $created]);?>
        </p>
    <?php endif;?>
</div>
<!-- Divider-->
<hr class="my-4" />