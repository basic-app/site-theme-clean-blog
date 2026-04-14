<?php

helper(['language']);

?>
<div class="post-preview">
    <a href="<?= esc($url);?>">
        <h2 class="post-title"><?= $title;?></h2>
        <h3 class="post-subtitle"><?= $description;?></h3>
    </a>
    <?php if($created):?>
        <p class="post-meta">
            <?= lang('Posted on {created}', ['created' => $created]);?>
        </p>
    <?php endif;?>
</div>
<!-- Divider-->
<hr class="my-4" />