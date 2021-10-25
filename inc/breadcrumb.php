<section class="theme-breadcrumb breadcrumb-img pad-50" style="background-image: url(<?= $page_banner; ?>);">
	<div class="theme-container container ">  
        <div class="row">
            <div class="col-sm-8 pull-left">
                <div class="title-wrap">
                    <h2 class="section-title no-margin"><?= $banner_name; ?></h2>
                    <p class="fs-16 no-margin black-clr"><?= $page_tagline; ?></p>
                </div>
            </div>
            <div class="col-sm-4">                        
                <ol class="breadcrumb-menubar list-inline">
                    <li><a href="<?= $baseurl; ?>" class="black-clr">Home</a></li>   
                    <?php if (!empty($page_parent)) {?>
                    	<li><a href="<?= $page_parent_url; ?>" class="black-clr"><?= $page_parent; ?></a></li>
                    <?php } ?>
                    <li class="active black-clr"><?= $page_name; ?></li>
                </ol>
            </div>  
        </div>
    </div>
</section>