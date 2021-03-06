<?php

use App\Controllers\CouponController;

require_once 'layout/header.php';
?>

<style>
    table{
        width: 100%;
    }
    th{
        padding: 20px;
    }
    td{
        padding: 10px;
    }
    button{
    }
@media (max-width: 700px){
    button{
        margin-bottom: 10px;
    }
}
</style>

<div class="page-wrapper text-center center">

    <h1>Coupons</h1>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php
                if (isset($_POST['quantity'])) {
                    echo CouponController::create($_POST['quantity']);
                }
            ?>
            <form method="post" class="form-wrapper">
                <input type="number" name="quantity" class="" placeholder="enter coupon quantity">
                <button type="submit" class="btn">generate</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="coupon" value="1">
                <button type="submit" class="btn">used coupons</button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="coupon" value="0">
                <button type="submit" class="btn">unused coupons</button>
            </form>
        </div>
    </div>

    <br>
    <hr class="">

    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6 tbl">
            <form method="post">
                <input type="text" name="csearch" id="" placeholder="enter coupon">
                <button type="submit" class="btn">search</button>
            </form>
            <br>
            <table border="1">
                <th>S/N</th>
                <th>Coupon</th>
                <th>used by</th>
                <?php
                    if (isset($_POST['coupon'])) {
                        CouponController::view('is_verified', $_POST['coupon']);
                    } elseif (isset($_POST['csearch'])) {
                        CouponController::searchCoupon($_POST['csearch']);
                    }
                ?>
            </table>
        </div>

        <div class="col-md-3"></div>
    </div>
    
</div>

<?php require_once 'layout/footer.php'; ?>