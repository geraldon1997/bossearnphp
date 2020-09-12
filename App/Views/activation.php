<?php
use App\Models\User;
?>
<div class="content">
    <h1>Buy Coupon</h1>

    <hr>
    
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo ONLINE_ACTIVATION; ?>" class="btn">Online</a>
        </div>
        <div class="col-md-6">
            <button data-toggle="collapse" data-target="#vendors" class="btn">Bank Transfer</button>
        </div>
    </div>

    <hr>
    
    <div class="row">
        <div class="tbl m-auto">
            <table border="1" class="collapse" id="vendors">
                <th>s/n</th>
                <th>name</th>
                <th>bank</th>
                <th>account number</th>
                <th>action</th>
                <?php $sn = 1; ?>
                <?php foreach (User::vendors() as $vendor) : ?>
                <tr>
                <td><?= $sn++; ?></td>
                <td><?= $vendor['surname'].' '.$vendor['othernames'] ?></td>
                <td><?= $vendor['bank']; ?></td>
                <td><?= $vendor['account']; ?></td>
                <td><a class="btn" href="https://api.whatsapp.com/send?phone=<?= $vendor['phone']; ?>&&text=hello i want to buy bossearn coupon" target="_blank">chat</a></td>
                </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
    
    <hr>
    
    <h1>Verify Coupon</h1>
    
    <div class="row">
    <h1></h1>
        <div class="col-md-6 m-auto">
            <form action="<?php echo VERIFY_COUPON; ?>" method="post" class="form-wrapper">
                <input type="text" name="coupon" class="form-control" placeholder="enter coupon to verify">
                <button type="submit" class="btn">Verify</button>
            </form>
        </div>
    </div>
    
</div>