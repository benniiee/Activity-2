<html>
    <body>
        <h1>Hello, from Benedict Lorenzo!</h1>
        <?php
            echo "Hello, World!";
        ?>
        <br>
        <?php
            $x = 214;
            $y = 15;
            $sum = $x + $y;
            $difference = $x - $y;
            $product = $x * $y;
            $quotient = $x / $y;

            echo "The sum is $sum. The difference is $difference. 
                The product is $product. The quotient is $quotient.";
        ?>
        <br>
        <?php
            if ($y % $x == 0)
                echo "$y is a factor of $x";
            else
                echo "$y is not a factor of $x";
        ?>
        <br>
        <?php
            echo "Multiples of 3 or 5:";
        ?>
        <br>
        <?php
            for ($i = 1; $i <= 100; $i++)
            {
                if ($i % 3 == 0 ||
                    $i % 5 == 0)
                    echo "$i, ";
        ?>
        <?php
            }
        ?>
        <br>
        <?php
            $products = array(
                array("name"=>"Product A", "price"=>10.50, "stock"=>12),
                array("name"=>"Product B", "price"=>5.60, "stock"=>7),
                array("name"=>"Product C", "price"=>7.00, "stock"=>5),
            );
            foreach($products as $p)
            {
                echo $p["name"] . " is " . $p["price"] . " pesos";
        ?>
                <br>
        <?php
            }
        ?>
    <body>
</html>