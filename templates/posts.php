<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach($posts as $post):?>
                <?= view_cell('Site::postItem', $post);?>
            <?php endforeach;?>
            <?php if($pager):?>
                <?= $pager->links('default', 'site');?>
            <?php endif;?>
        </div>
    </div>
</div>