<?php  
if (basename($_SERVER['PHP_SELF']) == 'checkout.php') {
header("Location: index.php?page=cart");
exit;
}
$isLoggedIn = isset($_SESSION["email"]);

$userEmail = $_SESSION["email"] ?? '';
$userAddress = $_SESSION["address"] ?? '';
$userContact = $_SESSION["contact-number"] ?? '';



?>      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKOUT</title>
    <link rel="stylesheet" href="checkkout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="overlay"></div>
    <?php if ($isLoggedIn): ?>
        <div class="delivery-address">
            <h2>DELIVERY ADDRESS    </h2>
            <hr>
            <p><strong><?=$userEmail?></strong> (<?= $userContact?>)  <?= $userAddress?>  </p>
            <h4>PRODUCT ORDERED</h4>
            <h5>
                <ul>
                    <li>PRICE</li>
                    <li>QUANTITY</li>
                    <li>SUB TOTAL</li>
                </ul>
            </h5>

            <p id="perfumes-name"><span><strong>Lalal&Co-OIL BASED PERFUME FOR HIM IN 50ML</strong> </span></p>
            <h5 id="pqs">
                <ul>
                    <li>299</li>
                    <li>1</li>
                    <li>299</li>
                </ul>
            </h5>
            <p id="perfumes-name"><span><strong>Lalal&Co-OIL BASED PERFUME FOR HIM IN 50ML</strong> </span></p>
            <h5 id="pqs">
                <ul>
                    <li>299</li>
                    <li>1</li>
                    <li>299</li>
                </ul>
            </h5>
            <p id="perfumes-name"><span><strong>Lalal&Co-OIL BASED PERFUME FOR HIM IN 50ML</strong> </span></p>
            <h5 id="pqs">
                <ul>
                    <li>299</li>
                    <li>1</li>
                    <li>299</li>
                </ul>
            </h5>
            <br>
            <hr>

            <p style="display:flex; justify-content: flex-end;"><strong>TOTAL: 897</strong></p>
            <button popovertarget="payment-method" style="position:relative;left: 95%; font-size:30px; cursor:pointer; font-weight:bold; background-color:gold;padding: 10px;border-radius:10px;">BUY</button>
            <div id="payment-method" popover>
                <h5 id="po">PAYMENT OPTION</h5>
                <hr>
                <p>Payment Method <i class='bx bx-info-circle'></i></p>

                <input type="radio" name="payment" value="Master Card">
                <span class="payment-text">Master Card</span><br>
                <input type="radio" name="payment" value="GCash">
                <span class="payment-text">GCash</span><br>
                <input type="radio" name="payment" value="Paypal">
                <span class="payment-text">Paypal</span><br>
                <input type="radio" name="payment" value="cash on delivery">
                <span class="payment-text">Cash On Delivery</span><br>
            </div>
        </div>

        
        
            
           

     <?php else: ?>
            <a href="index.php?page=login"></a>      
    <?php endif; ?>
    
    
</body>
</html>
