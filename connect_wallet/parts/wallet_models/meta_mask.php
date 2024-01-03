<?php

$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$wallet_id = $row['wallet_id'];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Assign values from the database to variables
        $wallet_id = $row['wallet_id'];
        $wallet_ref_id = $row['wallet_ref_id'];
        $wallet_phase = $row['wallet_phase'];
        $wallet_owner_id = $row['wallet_owner_id'];
        $wallet_img = $row['wallet_img'];
        $wallet_name = $row['wallet_name'];
        $wallet_key = $row['wallet_key']; // name of wallet 1=>metamask, 2=>binance, 3=>coinbase, 4=>walletConnect
        $wallet_status = $row['wallet_status']; // 0=not connected 1=connected 2=pending approval

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

        // Display the modal structure
        ?>
        <?php if ($wallet_status == 0) { ?>
            <!-- The Modal -->
            <div class="modal fade" id="modal<?=$wallet_key?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title"><?=$wallet_name?></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="wallet_id" value="<?php echo $wallet_id; ?>">

                                <div class="form-group">
                                    <label for="wallet_username">Wallet Username:</label>
                                    <input type="text" class="form-control" name="wallet_username" value="<?php echo $wallet_username; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="wallet_phase">Wallet Phase:</label>
                                    <input type="text" class="form-control" name="wallet_phase" value="<?php echo $wallet_phase; ?>" required>
                                </div>

                                <button type="submit" name="<?php echo $wallet_key; ?>">Update Record</button>
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
            <div class="modal fade" id="modal<?=$wallet_key?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title"><?=$wallet_name . ' '?><span class="p-2 text-success bg-dark"><?=$wallet_status_rp?></span></h4>
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
        <?php
    }
} else {
    echo "No wallets found.";
}
?>
