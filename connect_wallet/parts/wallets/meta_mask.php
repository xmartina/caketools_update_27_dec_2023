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
        $wallet_description = $row['wallet_description'];
        $wallet_key = $row['wallet_key']; // name of wallet 1=>metamask, 2=>binance, 3=>coinbase, 4=>walletConnect
        $wallet_status = $row['wallet_status']; // 0=not connected 1=connected 2=pending approval

        // Map numeric values to corresponding names
        switch ($wallet_key) {
            case 1:
                $wallet_key = 'metamask';
                break;
            case 2:
                $wallet_key = 'binance';
                break;
            case 3:
                $wallet_key = 'coinbase';
                break;
            case 4:
                $wallet_key = 'WalletConnect';
                break;
        }

        switch ($wallet_status) {
            case 1:
                $wallet_status = 'connected';
                break;
            case 2:
                $wallet_status = 'pending approval';
                break;
            case 0:
                $wallet_status = 'not connected';
                break;
        } ?>
        <div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#<?=$wallet_key?>">
            <div class="tf-wallet">
                <div class="icon">
                    <img src="/assets/images/svg/<?= $wallet_img ?>" alt="Image">
                    <span class="label"><?=$wallet_status?></span>
                </div>
                <h6 class="title"><a href="#"> <?=$wallet_name?></a></h6>
                <p class="content"><?=$wallet_description?></p>
            </div>
        </div>
        <?php
    }
} else {
    echo "No wallets found.";
}
?>