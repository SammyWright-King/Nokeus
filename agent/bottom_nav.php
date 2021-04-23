<?php
	$filename = basename($_SERVER['REQUEST_URI']);
?>
    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="home.php" class="item <?php if($filename=='home.php') { echo 'active'; } ?> ">
            <div class="col">
                <ion-icon name="home"></ion-icon>
                <strong>HOME</strong>
            </div>
        </a>
        <a href="activity.php" class="item <?php if($filename=='activity.php') { echo 'active'; } ?>">
            <div class="col">
                <ion-icon name="document-text-outline"></ion-icon>
                <strong> Trades	 </strong>
            </div>
        </a>
        <a href="wallet.php" class="item <?php if($filename=='wallet.php') { echo 'active'; } ?>">
            <div class="col">
                <ion-icon name="wallet"></ion-icon>
                <strong> Wallet </strong>
            </div>
        </a>
        <a href="#" class="item <?php if($filename=='report.php') { echo 'active'; } ?>">
            <div class="col">
                <ion-icon name="grid"></ion-icon>
                <strong> Reports </strong>
            </div>
        </a>
        <a href="profile.php" class="item <?php if($filename=='profile.php') { echo 'active'; } ?>">
            <div class="col">
                <ion-icon name="person"></ion-icon>
                <strong> Agent </strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->