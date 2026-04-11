<?php helper(['language']);?>
<!-- Post preview-->
<div class="post-preview">
    <a href="<?= esc($url);?>">
        <h2 class="post-title"><?= esc($title);?></h2>
        <h3 class="post-subtitle"><?= esc($description);?></h3>
    </a>
    <?php if($authorName || $createdDate):?>
    <p class="post-meta">
        <?php if($authorName):?>
            <?= lang('Posted by');?>
            <?php if($authorUrl):?>
                <a href="<?= $authorUrl;?>"><?= $authorName;?></a>
            <?php else:?>
                <?= $authorName;?>
            <?php endif;?>
        <?php endif;?>
        <?php if($createdDate):?>
            <?= $createdDate;?>
        <?php endif;?>
    </p>
    <?php endif;?>
</div>
<!-- Divider-->
<hr class="my-4" />