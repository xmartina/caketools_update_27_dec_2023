<div class="content-inner active" >
    <div class="tab-details">
        <div class="top">
            <div class="author">
                <div class="heading">Current Owner</div>
                <div class="infor">
                    <img src="/assets/images/author/<?= $nft_current_owner_img ?>" alt="Image" style="max-width: 40px;">
                    <h6 class="name"><?=$nft_current_owner_name?></h6>
                </div>
            </div>
            <div class="author">
                <div class="heading">Creator</div>
                <div class="infor">
                    <img src="/assets/images/author/<?= $nft_creator_img ?>" style="max-width: 40px;" alt="Image">
                    <h6 class="name"><?= $nft_creator_name ?></h6>
                </div>
            </div>
        </div>
        <div class="title-propepties">Properties</div>
        <ul class="properties">
            <?php include_once (rootDir.'nft_details/parts/right/parts/details_tab/parts/background.php'); ?>
            <?php include_once (rootDir.'nft_details/parts/right/parts/details_tab/parts/mouth_grade.php'); ?>
            <?php include_once (rootDir.'nft_details/parts/right/parts/details_tab/parts/size.php'); ?>
            <?php include_once (rootDir.'nft_details/parts/right/parts/details_tab/parts/head.php'); ?>
            <?php include_once (rootDir.'nft_details/parts/right/parts/details_tab/parts/body.php'); ?>

            <li><a href="#" class="active">See more</a></li>
        </ul>
    </div>
</div>