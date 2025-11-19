<?php

require "api/getProduct.php";

$ecwid = new Ecwid();

// get first 60 products
$json = $ecwid->getProducts(1, 10);
$data = json_decode($json, true);

// if error, show it
if (!isset($data["items"])) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shop</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f7f7f7;
        padding: 20px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 20px;
    }

    .card {
        background: white;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        text-align: center;
        transition: 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .name {
        font-size: 18px;
        margin: 10px 0;
        font-weight: bold;
    }

    .price {
        font-size: 16px;
        color: #27ae60;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .stock {
        font-size: 14px;
        margin-bottom: 10px;
        color: #666;
    }

    .btn {
        display: inline-block;
        padding: 10px 14px;
        background: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-size: 14px;
    }

    .btn:hover {
        background: #2980b9;
    }

</style>
</head>
<body>

<h1>Shop</h1>
<div class="grid">

<?php foreach ($data["items"] as $item): ?>

    <?php
        // Image (400px)
        $img = $item["media"]["images"][0]["image160pxUrl"] ?? null;
        $alt = $item["images"][0]["alt"] ?? "";

        // Details
        $name = $item["name"] ?? "";
        $price = $item["price"] ?? 0;
        $stock = ($item["inStock"] ?? false) ? "In Stock" : "Out of Stock";
        $url = $item["url"] ?? "#";
    ?>

    <div class="card">
        <?php if ($img): ?>
            <img src="<?= $img ?>" alt="<?= htmlspecialchars($alt) ?>">
        <?php endif; ?>

        <div class="name"><?= htmlspecialchars($name) ?></div>
        <div class="price">₱<?= number_format($price, 2) ?></div>
        <div class="stock"><?= $stock ?></div>

        <a class="btn" href="<?= $url ?>" target="_blank">View Product</a>
    </div>

<?php endforeach; ?>

</div>

</body>
</html>
