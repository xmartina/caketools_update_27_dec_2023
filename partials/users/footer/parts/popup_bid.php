<div class="modal fade popup" id="popup_bid" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body space-y-20 pd-40">
                <h3>Place a Bid</h3>
                <p class="text-center sub-heading">You must bid a least <span class="price color-popup"><?=$nft_price." ".$cur_name?></span></p>
                <input type="text" class="form-control" placeholder="<?=$nft_price." ".$cur_name?>">
                <p class="label-1">Enter quantity. <span class="color-popup"><?php if($available_quantity == 0){echo 'unavailable for now';}else{echo $available_quantity;}?> available</span>
                </p>
                <input type="text" class="form-control quantity form-bottom" value="1">
                <div class="d-flex justify-content-between detail-1">
                    <p> You must bid at least:</p>
                    <p class="text-right price color-popup"> <?=$nft_price." ".$cur_name?> </p>
                </div>
                <div class="d-flex justify-content-between detail-2">
                    <p> Service fee:</p>
                    <p class="text-right price color-popup"> <?=$service_fee?> </p>
                </div>
                <div class="d-flex justify-content-between detail-3">
                    <p> Total bid amount:</p>
                    <p class="text-right price color-popup"> <?php echo $nft_price * $available_quantity; ?> <?=" ".$cur_name?> </p>
                </div>

                <a href="#" <?php if($available_quantity == 0){?> disabled <?php } ?> class="button-popup<?php if($available_quantity == 0){?> disabled <?php } ?>" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place bid</a>
            </div>
        </div>
    </div>
</div>