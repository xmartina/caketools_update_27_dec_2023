<div class="content">
    <div class="content-top">
        <div class="author">
            <img src="/assets/images/author/<?= $nft_category_img ?>" alt="Image">
            <h6 class="title"><?= $nft_category_name ?></h6>
        </div>
        <div class="wishlish">
            <div class="number-wishlish"><i class="far fa-heart"></i>68</div>
            <?php if (isset($user_id)) {?>
            <div class="option btn-option"><i class="far fa-ellipsis-h"></i>
                <div class="option_popup">
                    <a href="#">Delete</a>
                    <a href="#">Edit</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <h2 class="title-detail"><?= $nft_name ?></h2>
    <p class="except"><?= $nft_description ?></p>
    <div class="tf-tab">
        <ul class="menu-tab ">
            <li class="tab-title active">
                <a href="#">Details</a>
            </li>
            <li class="tab-title ">
                <a href="#">Bids</a>
            </li>
            <li class="tab-title">
                <a href="#">History</a>
            </li>

        </ul>
        <div class="content-tab">
            <?php include_once (rootDir.'nft_details/parts/right/parts/details_tab.php') ?>
            <?php include_once (rootDir.'nft_details/parts/right/parts/bids_tab.php') ?>
            <?php include_once (rootDir.'nft_details/parts/right/parts/history_tab.php') ?>
        </div>
    </div>
    <div class="content-bottom">
        <div class="heading">
            <h6>Top bid</h6>
            <div class="price"><div class="icon"><i class="fab fa-ethereum"></i></div><span>3.52 ETH ($9118.1 USD)</span></div>
        </div>
        <div class="button">
            <a href="#" class="tf-button" data-toggle="modal" data-target="#popup_bid">Place your bid</a>
            <a href="#" class="tf-button">Save for later</a>
        </div>
    </div>
</div>