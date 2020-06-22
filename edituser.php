<?php

use App\Models\Bank;
use App\Models\User;

require_once 'layout/header.php';

if (!isset($_GET['uid']) || empty($_GET['uid'])) {
    echo "<script>window.location = '/' </script>";
}

$user = User::findUser('id', $_GET['uid'])[0];
$banker = Bank::findBank('user_id', $_GET['uid']);
if (!empty($banker)) {
    $bank = $banker[0];
}

?>

<div class="page-wrapper text-center center">

    <div class="row">
        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            <form class="form-wrapper" method="POST">
            <h4>User Update form</h4>
                <label for="email">user email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>">
                <label for="bank">user bank name</label>
                <input type="text" class="form-control" name="bn" value="<?php  ?>">
                <label for="acct">user account name</label>
                <input type="text" class="form-control" name="ban" value="<?php ?>">
                <label for="acctnum">user account number</label>
                <input type="number" class="form-control" name="bacn" value="<?php  ?>">
                <button type="submit" class="btn btn-primary">update <i class="fa fa-arrow-right"></i></button>
            </form>
        </div>

        <div class="col-lg-3"></div>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>