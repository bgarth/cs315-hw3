<?=template_header('Place Order')?>

<?php
$address = $_POST['address'];
?>



<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed <?=$address?></h1>
    <p>Thank you for ordering with us! We'll contact you by email with your order details.</p>
</div>

<?php unset($_SESSION['cart']) ?>

<?=template_footer()?>