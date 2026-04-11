<?php helper(['url', 'language']);?>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= base_url('/');?>"><?= esc($title);?></a>
        <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarResponsive" 
            aria-controls="navbarResponsive" 
            aria-expanded="false" aria-label="<?= lang('Toggle navigation');?>">
            <?= lang('Menu');?>
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <?php foreach($menu as $item):?>
                    <li class="nav-item">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" 
                            href="<?= esc($item['url']);?>"><?= esc($item['label']);?></a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>