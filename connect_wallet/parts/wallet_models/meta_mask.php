<?php
$sql = "SELECT * FROM wallet WHERE wallet_owner_id = $user_id";
$result = $conn->query($sql);

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

        switch ($wallet_status) {
            case 0:
                $wallet_status = 'not connected';
                break;
            case 1:
                $wallet_status = 'connected';
                break;
            case 2:
                $wallet_status = 'pending approval';
                break;
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
            <div class="modal fade" id="modal<?=$wallet_key_name?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title"><?=$wallet_name?></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form id="myForm<?=$wallet_key_name?>">
                                <div class="form-group">
                                    <label for="input1<?=$wallet_key_name?>">Input 1:</label>
                                    <input type="text" class="form-control" id="input1<?=$wallet_key_name?>" placeholder="Enter Input 1">
                                </div>
                                <div class="form-group">
                                    <label for="input2<?=$wallet_key_name?>">Input 2:</label>
                                    <input type="text" class="form-control" id="input2<?=$wallet_key_name?>" placeholder="Enter Input 2">
                                </div>
                                <button type="button" class="btn btn-primary" onclick="submitForm<?=$wallet_key_name?>()">Submit</button>

                                <!-- Loader -->
                                <div class="spinner-border text-primary mt-3" role="status" id="loader<?=$wallet_key_name?>" style="display: none;">
                                    <span class="sr-only">Loading...</span>
                                </div>

                                <!-- Error Message -->
                                <div id="errorMessage<?=$wallet_key_name?>" class="text-danger mt-3" style="display: none;"></div>
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
            <div class="modal fade" id="modal<?=$wallet_key_name?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title"><?=$wallet_name . ' '?><span class="p-2 text-success bg-dark"><?=$wallet_status?></span></h4>
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
