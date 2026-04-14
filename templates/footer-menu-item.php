<?php
if (!$item_enabled)
{
    return;
}
?>
<li class="list-inline-item">
    <a href="<?= $item_url;?>" title="<?= esc($item_name);?>" target="_blank">
       <span class="fa-stack fa-lg">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fab <?= esc($item_html_class);?> fa-stack-1x fa-inverse"></i>
        </span>
    </a>
</li>