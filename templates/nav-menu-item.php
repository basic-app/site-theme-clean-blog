<?php
if (!$item_enabled)
{
    return;
}
?>
<li class="nav-item">
    <?php if($item_active):?>
        <a class="nav-link active px-lg-3 py-3 py-lg-4" href="<?= $item_url;?>"><?= esc($item_name);?></a>
    <?php else:?>
        <a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $item_url;?>"><?= esc($item_name);?></a>
    <?php endif;?>
</li>