<?php require 'inc/head.php';

//Si le cookie PHPSESSID existe mais pas la variable username
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Non identifié. Redirection.)')</script>";
    //Redirection au login
    header("Location: /login.php");
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Quantity</th>
            </tr>

<?php
if (!isset($_SESSION['cart'])){

    echo "<tr><td>Your cart is empty</td></tr>";
}else{
    $countCart = count($_SESSION['cart']);
    foreach($_SESSION['cart'] as $key => $value){
        echo "<tr><td>$value[id]</td><td>$value[name]</td><td>$value[quantity]</td></tr>";
    }
    echo "<tbody><td>A total of $countCart cookies. Thank you !</td></tbody>";
}
?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
