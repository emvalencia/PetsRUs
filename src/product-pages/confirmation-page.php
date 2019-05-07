<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <script src="products.js"></script>
    <title>Dog Food</title>
  </head>
  <body>

    <div class="container-fluid">
        <!-- row #1 -->
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8 purple-header">
                <h3>Order Confirmation</h3>
            </div>
            <div class="col-2"></div>
        </div>

        <!-- order form -->
        <div class="row pt-2 pb-5">
            <div class="col-2"></div>
            <div class="col text-center">
                <h1 class="pt-4 pb-5">Thank you for your purchase!</h1>
                <?php
                    require_once "../DBConnect.php";
                    $pdo = connect();

                    $order_num = (!empty($_GET['order']) ? $_GET['order'] : false);

                    $data = $pdo->query("select * from OrderDetails where order_num = $order_num;")->fetchAll();
                            foreach ($data as $row) {
                            }

                    $data2 = $pdo->query("select * from product where  id =". $row['product_id'].";")->fetchAll();
                            foreach ($data2 as $row2) {
                            }

                    $data3 = $pdo->query("select rate from TaxRate where  zip =". $row['zip'].";")->fetchAll();
                    foreach ($data3 as $row3) {
                    }
                    
                    
                    echo "<h3 class='pt-3 pb-4'>Order Details for: ". $row['fname'] . " ". $row['lname']. "</h3>";
              
                    $total = $row['qty'] * $row2['price'] * $row3['rate'];

                    echo '<table class="table table-hover">';
                    echo '<thead class="thead-light">';
                    echo '<tr>';
                    echo '<th style="width: 15%;"scope="col">Order Number</th>';
                    echo '<th style="width: 10%;"scope="col">First Name</th>';
                    echo '<th style="width: 10%;"scope="col">Last Name</th>';
                    echo '<th style="width: 25%;"scope="col">Product</th>';
                    echo '<th style="width: 10%;"scope="col">Quantity</th>';
                    echo '<th style="width: 10%;"scope="col">Price</th>';
                    echo '<th style="width: 10%;"scope="col">Tax Rate %</th>';
                    echo '<th style="width: 10%;"scope="col">Grand Total</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>'.$order_num.'</th>';
                    echo '<td>'.$row['fname'].'</td>';
                    echo '<td>'.$row['lname'].'</td>';
                    echo '<td>'.$row2['name'].'</td>';
                    echo '<td>'.$row['qty'].'</td>';
                    echo '<td>$'.$row2['price'].'</td>';
                    echo '<td>'. $row3['rate'].'</td>';
                    echo '<td>$'.round($total,2).'</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';

                ?>

            </div>
            <div class="col-2"></div>
        </div>
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <div class="footer">
    <div>Designed and created by Kevin Florio, Emery Valencia, and Jose Vargas.</div>
    <div>Copyright © 2019 PetsRUs, Inc. All Rights Reserved.</div>
</div>
</html>