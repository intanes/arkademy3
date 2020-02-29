
<table border="1">
    <?php
    include 'koneksi.php';
    $data = mysqli_query($konek, "SELECT cashier.name as cashier,product.name as product,category.name as category,product.price 
        from cashier join product on cashier.id=product.id_cashier join category on product.id_category=category.id");
    $no=1;
    foreach ($data as $row){
        echo "<tr>
            <td>".$row['cashier']."</td>
            <td>".$row['product']."</td>
            <td>".$row['category']."</td>
            <td>".$row['price']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>