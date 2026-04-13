<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ms-auto py-4 py-lg-0">
        <?php foreach($items as $item):?>
            <?= view_cell('Site::navMenuItem', $item);?>
        <?php endforeach;?>
    </ul>
</div>