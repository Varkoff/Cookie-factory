<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php

if (isset($_SESSION['username'])) {
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    array_push($_SESSION['cart'], array('id' => $_GET['id'], 'name' => $_GET['name'], 'quantity' => +$_GET['quantity']));
} else {
    if (isset($_GET)) {
        array_push($_SESSION['cart'], array('id' => $_GET['id'], 'name' => $_GET['name'], 'quantity' => +$_GET['quantity']));
    }
}
header("Location: index.php");
}else{
    header("Location: login.php");
}

?>
<?php require 'inc/foot.php'; ?>