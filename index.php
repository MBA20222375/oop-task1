    
    <?php
include "task2-oop.php";    
include "Products.php";   
?>

    
    <!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="row">

        <?php foreach ($products as $product): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?= $product->image ?>" class="card-img-top">
                    <div class="card-body">
                        <h5><?= $product->getName() ?></h5>
                        <p><?= $product->description ?></p>
                        <p>Price: <?= $product->price ?> EGP</p>
                        <p>After Discount (10%):
                            <?= $product->priceAfterDiscount(10) ?> EGP
                        </p>
                        <p>Final Price:
                            <?= $product->getFinalPrice() ?> EGP
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

</body>
</html>
