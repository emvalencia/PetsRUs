<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../products.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../../styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/favicon.ico" />
    <script src="../products.js"></script>
    <title>Dog Food</title>
  </head>
  <body>

    <!-- navigation bar -->
    <div class="navbar2">
        <?php
            include 'dog_nav.php';
        ?>
    </div> 

    <div class="container-fluid">

        <!-- row #1 -->
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8 purple-header">
                <h3 id="product-name">Pedigree</h3>
            </div>
            <div class="col-2"></div>
        </div>

        <?php
            require_once "../../DBConnect.php";
            $pdo = connect();
            $data = $pdo->query("select * from product where id = 1000000004;")->fetchAll();
            foreach ($data as $row) {
            }

            // row #2
            echo '<div class="row pt-2">';
            echo '<div class="col-2"></div>';
            echo '<div class="col-sm">';
            echo '<img src="'.$row['image_url'].'" class="large-image"/>';
            echo '</div>';
            echo '<div class="col-sm">';
            echo '<h3 id="product-description">'.$row['name'].'</h3>';
            echo '<h3 id="product-price">$'.$row['price'].'</h3>';
            echo '</div>';
            echo '<div class="col-2"></div>';
            echo '</div>';

            // row #3
            echo '<div class="row pt-2">';
            echo '<div class="col-2"></div>';
            echo '<div class="col-8">';
            echo '<p><strong>Description</strong><br/>'.$row['summary'].'</p>';
            echo '<p><strong>Key Benefits</strong><br/>'.$row['information'].'</p>';
            echo '</div>';
            echo '<div class="col-2"></div>';
            echo '</div>';

        ?>

        <!-- row #1 -->
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8 purple-header">
                <h3>Purchase Item</h3>
            </div>
            <div class="col-2"></div>
        </div>

        <!-- order form -->
        <div class="row pt-2 pb-5">
            <div class="col-2"></div>
            <div class="col">
                <form name="submit-order-form" class="needs-validation" novalidate id="main-order-form">
                    <h3>Product Information</h3>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="product-identifier">Product ID Number#</label>
                            <label id="product-id-num" for="product-identifier">1000123459</label>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="quantity">Quantity</label>
                            <input oninput="validate_form('quantity')" name="quantity" type="text" class="form-control" id="quantity" placeholder="3" required>
                            <div class="invalid-feedback">Please enter a quantity</div>
                        </div>
                    </div>
                    <h3>Shipping Address</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first-name">First Name</label>
                            <input oninput="validate_form('first-name')" name="first-name" type="text" class="form-control" id="first-name" placeholder="John" required>
                            <div class="invalid-feedback">Please enter your first name</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last-name">Last Name</label>
                            <input oninput="validate_form('last-name')" name="last-name" type="text" class="form-control" id="last-name" placeholder="Doe" required>
                            <div class="invalid-feedback" >Please enter your last name</div>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="email-address">Email Address</label>
                            <input oninput="validate_form('email-address')" name="email-address" type="email" class="form-control" id="email-address" placeholder="johndoe@youremail.com" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>

                        </div>
                        <div class="form-group col-md-4" id="phone-form-group">
                            <label for="phone">Phone Number</label>
                            <input oninput="validate_form('phone')" name="phone" type="text" class="form-control" id="phone" placeholder="123-123-1234" required>
                            <div class="invalid-feedback" id="phone-feedback">Please enter as: 123-123-1234</div>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Address</label>
                            <input oninput="validate_form('inputAddress')" name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">Please enter a valid address</div>
                          </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input oninput="validate_form('inputCity')" name = "inputCity" type="text" class="form-control" id="inputCity" placeholder="Pasadena" required>
                            <div class="invalid-feedback">Please enter your city</div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select oninput="validate_form('inputState')" id="inputState" class="form-control" required>
                                <option value="">Choose...</option>
                                <option value="1">California</option>
                                <option value="2">Oregon</option>
                                <option value="3">Washington</option>
                            </select>
                            <div class="invalid-feedback">Please select a state</div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input oninput="validate_form('inputZip')" name="inputZip" type="text" class="form-control" id="inputZip" placeholder="90003" required>
                            <div class="invalid-feedback">Please enter a valid zip code</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputShipping">Shipping</label>
                        <select oninput="validate_form('inputShipping')" id="inputShipping" class="form-control" required>
                            <option value="">Choose...</option>
                            <option value="1">Overnight (1-day)</option>
                            <option value="2">Expedited (2-3 business days)</option>
                            <option value="3">Ground (4-6 business days)</option>
                        </select>
                        <div class="invalid-feedback">Please select a shipping option</div>
                    </div>
                    <h3>Payment Information</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="credit-card">Credit Card Information</label>
                            <input oninput="validate_form('credit-card')" type="text" class="form-control" id="credit-card" placeholder="1234-1234-1234-1234" required>
                            <div class="invalid-feedback">Please enter as: 1234-1234-1234-1234</div>

                        </div>
                        <div class="form-group col-md-3">
                            <label for="csc">CSC</label>
                            <input oninput="validate_form('csc')" name="csc" type="text" class="form-control" id="csc" placeholder="123" required>
                            <div class="invalid-feedback">Please enter your 3-digit csc</div>

                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCreditCardType">Type of Card</label>
                            <select oninput="validate_form('inputCreditCardType')" id="inputCreditCardType" class="form-control" required>
                                <option value="">Choose...</option>
                                <option value="1">VISA</option>
                                <option value="2">Mastercard</option>
                                <option value="3">American Express</option>
                            </select>
                            <div class="invalid-feedback">Please select a card type</div>
                        </div>
                    </div>
                    <button disabled id="checkout-btn" type="submit" class="btn btn-success" onclick="processCheckout()">Checkout</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>


        <!-- used to handle order form validation -->
        <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {

              var forms = document.getElementsByClassName('needs-validation');

              var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
    
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