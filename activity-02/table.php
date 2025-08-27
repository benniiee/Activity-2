<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $products = array
            (
                array("name"=>"Product A", "price"=>10.50, "stock"=>12),
                array("name"=>"Product B", "price"=>5.60, "stock"=>7),
                array("name"=>"Product C", "price"=>7.00, "stock"=>5),
                array("name"=>"Product D", "price"=>15.20, "stock"=>10),
                array("name"=>"Product E", "price"=>12.40, "stock"=>23),
                array("name"=>"Product F", "price"=>4.30, "stock"=>3)
            );
    ?>
    <h1 class="title_table">Dynamic Table</h1> 
    <table border=1>
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php
            $product_no = 1;
            foreach ($products as $p)
            {
        ?>
            <tr>
        <?php
                if ($p["stock"] >= 10)
                {
        ?>
                    <td><?= $product_no ?></td>
                    <td><?= $p["name"]?></td>
                    <td><?= $p["price"]?></td>
                    <td><?= $p["stock"]?></td>
        <?php
                }
                else if ($p["stock"] < 10)
                {
        ?>
                    <td><span class="warning"><?= $product_no?></span></td>
                    <td><span class="warning"><?= $p["name"]?></span></td>
                    <td><span class="warning"><?= $p["price"]?></span></td>
                    <td><span class="warning"><?= $p["stock"]?></span></td>
        <?php
                }
        ?>
            </tr>
        <?php
                $product_no++;
            }
        ?>
    </table>
</body>

</html>
