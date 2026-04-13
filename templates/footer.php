<!-- Footer-->
<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php if($menu):?>
                    <ul class="list-inline text-center">
                        <?php foreach($menu as $item):?>
                            <?= view_cell('Site::footerMenuItem', $item);?>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
                <div class="small text-center text-muted fst-italic"><?= esc($copyright);?></div>
            </div>
        </div>
    </div>
</footer>