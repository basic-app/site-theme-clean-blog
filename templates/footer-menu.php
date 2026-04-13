<ul class="list-inline text-center">
    <?php foreach($items as $item):?>
        <?= view_cell('Site::footerMenuItem', $item);?>
    <?php endforeach;?>
</ul>