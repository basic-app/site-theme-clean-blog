<?php

$pager->setSurroundCount(0); 

if (!$pager->hasPrevious() && !$pager->hasNext())
{
    return;
}

?>
<!-- Pager-->
<div class="d-flex justify-content-end mb-4">
    <?php if($pager->hasPrevious()):?>
        <a class="btn btn-primary text-uppercase" href="<?= $pager->getPrevious();?>">
            <?= lang('Pager.previous');?>        
        </a>
    <?php endif;?>
    <?php if($pager->hasNext()):?>
        <a class="btn btn-primary text-uppercase ms-3" href="<?= $pager->getNext();?>">
            <?= lang('Pager.next');?>        
        </a>
    <?php endif;?>
</div>