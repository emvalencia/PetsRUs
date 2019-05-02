<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="products.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/favicon.ico" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="products.js"></script>
    <title>Products</title>
</head>

    <!-- navigation bar -->
    <div class="navbar2">
        <?php
            include 'product_nav.php';
        ?>
    </div>

<body>

    <!-- container -->
    <div class="container-fluid">

        <!-- cover image -->
        <div class="row">
            <div class="col-lg-12 px-0">
                <div style="text-align: center;">
                    <img src="../../assets/dog-cover-2.jpg" alt="dog-cover-photo" class="cover-img"/>
                    <div class="transparent-box">Dogs
                    </div>
                </div>
            </div>
        </div>
    
        <!-- row #1 with table -->
        <div class="row pt-2">
                <div class="col-2"></div>
                <div class="col-8">

            <!-- product table -->
            <table class="table table-light">
                <thead class="purple-header">
                    <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "../DBConnect.php";
                        $pdo = connect();
                        $data = $pdo->query("select * from product where id >= 1000000004 and id < 1000000008;")->fetchAll();
                        $len = count($data);

                        for($x = 0; $x < $len; $x++) {
                            echo '<tr>';
                            echo '<th scope="row"><img src="../../assets/'.$data[$x]['image_url'].'" alt="cat-food" onclick="handleClick('.$data[$x]['id'].')" class="product-img"/></th>';
                            echo '<td class="text">';
                            echo '<div class="product-title">'.$data[$x]['name'].'</div>';
                            echo '<p>'.$data[$x]['summary'].'</p>';
                            echo '<div class="price">$'.$data[$x]['price'].'</div>';
                            echo '<button type="button" class="btn btn-secondary btn-md" onclick="handleClick('.$data[$x]['id'].')">More Info</button>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            </div>
        <div class="col-2"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <div class="footer">
    <div>Designed and created by Kevin Florio, Emery Valencia, and Jose Vargas.</div>
    <div>Copyright © 2019 PetsRUs, Inc. All Rights Reserved.</div>
  </div>
</html>