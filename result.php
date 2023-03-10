<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<center>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-4">   </div>
            <div class="col-4 form">
                <br>
                <h1>รายการโอนเงิน</h1>
                    </p>
                    <p style="font-size:small;">บัญชีปลายทาง : <?= $_SESSION['rdoBank']?></p>
                    <p style="font-size:small;">ชื่อ-นามสกุล : <?= $_SESSION['txtFormName']?></p>
                    <p style="font-size:small;">เบอร์โทรศัพท์ : <?= $_SESSION['txtphone']?></p>
                    <p style="font-size:small;">จำนวนเงินที่โอน: <?= $_SESSION['txttotal']?>บาท</p>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>