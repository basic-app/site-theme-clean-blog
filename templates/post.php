<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php if($title):?>
                <h1><?= $title;?></h1>
            <?php endif;?>
            <?= $text;?>
            <?php if($created):?>
                <div class="mb-5">
                    <?= $created;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>