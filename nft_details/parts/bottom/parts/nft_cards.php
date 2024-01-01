<?php
$sql = "SELECT * FROM nft_parent";
$result = $conn->query($sql);

// Check if there are rows
if ($result->num_rows > 0) {
// Iterate through the first 4 items
$count = 0;
while ($nftData = $result->fetch_assoc()) {
?>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ">
    <div class="sc-product style2">
        <div class="top">
            <a href="/nft_details?ref_id=<?= $nft_ref_id ?>" class="tag"><?=$nft_name?></a>
            <div class="wish-list">
                <a href="#" class="heart-icon"></a>
            </div>
        </div>
        <div class="bottom">
            <div class="details-product">
                <div class="author">
                    <div class="avatar">
                        <img src="/assets/images/author/<?=$nft_creator_img?>" alt="images">
                    </div>
                    <div class="content">
                        <div class="position">Creator</div>
                        <div class="name"> <a href="/nft_details?ref_id=<?= $nft_ref_id ?>">Cynthia Burke</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features">
            <div class="product-media">
                <img src="/assets/images/<?=$nft_img?>" alt="images">
            </div>
            <div class="rain-drop1"><img src="/assets/images/icon/rain1.svg" alt="images"></div>
            <div class="rain-drop2"><img src="/assets/images/icon/rain2.svg" alt="images"></div>
        </div>
        <div class="bottom-style2">
            <div class="price">
                <div class="icon"><img src="/assets/images/icon/<?=$cur_img?>" alt="images"></div>
                <div class="content">
                    <div class="name"><?=$cur_abbreviation?></div>
                    <div class="cash"><?=$nft_price?></div>
                </div>
            </div>
            <div class="product-button">
                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"> Purchase</a>
            </div>
        </div>

    </div>
</div>

    <?php
    // Increment the count
    $count++;

    // Break the loop after printing 4 cards
    if ($count >= 4) {
        break;
    }
}
} else {
    echo "No NFT data found.";
}
?>
