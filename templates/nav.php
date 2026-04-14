<?php helper(['url', 'language']);?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= base_url('/');?>"><?= $title;?></a>
        <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarResponsive" 
            aria-controls="navbarResponsive" 
            aria-expanded="false" aria-label="<?= lang('Toggle navigation');?>">
            <?= lang('Menu');?>
            <i class="fas fa-bars"></i>
        </button>
        <?= view_cell('Site::navMenu', $menu);?>
    </div>
</nav>