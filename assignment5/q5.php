<?php
    $products = array (
        'product1' => array ('name' => 'Laptop', 'price' => 800, 'stock' => 15),
        'product2' => array ('name' => 'Smartphone', 'price' => 400, 'stock' => 20),
        'product3' => array ('name' => 'Headphones', 'price' => 50, 'stock' => 50),
    );
    print_r($products);
    echo "<br><br>";
    $avg=0;
    foreach($products as $product => $info){
        if($product==="product2"){
            echo "The price of the ".$product." is ". $info['price'];
        }
        echo '<br>';
        if($product==='product3'){
            if($info['stock'] > 0){
                echo "in stock";
            }
            else{
                echo "out of stock";
            }
        }
        echo '<br>';
        $avg=$avg+$info['price'];
    }
    echo '<br>';
    echo "the average price of product is ".$avg/3;
    echo '<br>';
    echo '<br>';
        ?>
        <table rules="all" border="1" cellpadding="5" >
            <tr>
                <td>ProductID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Discounted Price</td>
            </tr>
            <?php
              foreach($products as $product => $info){
                ?>
                <tr>
                    <th><?php echo $product; ?></th>
                    <th><?php echo $info['name']; ?></th>
                    <th><?php echo $info['price']; ?></th>
                    <th><?php echo $info['stock']; ?></th>
                    <th><?php echo $info['price']*0.9;?> </th>
                </tr>
                <?php
              }
              ?>
        </table>
        <?php
?>