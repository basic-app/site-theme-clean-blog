<!-- Footer-->
<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <?php foreach($menu as $item):?>
                        <li class="list-inline-item">
                            <a href="<?= esc($item['url']);?>">
                                <?php if(empty($item['fa-icon'])):?>
                                   <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab <?= esc($item['fa-icon']);?> fa-stack-1x fa-inverse"></i>
                                    </span>
                                <?php else:?>
                                    <?= $item['name'];?>
                                <?php endif;?>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
                <div class="small text-center text-muted fst-italic"><?= esc($copyright);?></div>
            </div>
        </div>
    </div>
</footer>