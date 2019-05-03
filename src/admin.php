<?php 
    require_once "DBConnect.php";

    $pdo = connect();

    if (isset($_POST["import-zip"])) {
    
        $fileName = $_FILES["file"]["tmp_name"];
        
        if ($_FILES["file"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                $sqlInsert = "INSERT into StateZip (zip, state, city)
                       values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "')";
                
                $pdo->exec($sqlInsert);
            }
        }
    }

    if (isset($_POST["import-tax"])) {
    
        $fileName = $_FILES["file2"]["tmp_name"];
        
        if ($_FILES["file2"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                $sqlInsert = "INSERT into TaxRate (state, zip, tax_region, rate)
                       values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','".$column[3]."')";
                
                $pdo->exec($sqlInsert);
            }
        }
    }

    if (isset($_POST["import-inventory"])) {
    
        $fileName = $_FILES["file3"]["tmp_name"];
        
        if ($_FILES["file3"]["size"] > 0) {
            
            $file = fopen($fileName, "r");
            
            while (($column = fgetcsv($file, 30000, ",")) !== FALSE) {

                $sqlInsert = "INSERT into Product (id, name, price, type, category, page_url, image_url, summary, description, benefits)
                       values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','".$column[3]."','".$column[4]."','".$column[5]."','".$column[6]."','".$column[7]."','".$column[8]."','".$column[9]."')";
                
                // echo $sqlInsert . "<br/>";

                $pdo->exec($sqlInsert);
            }
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Test PA2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row pt-5">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="form-horizontal" action="" method="post" name="uploadCSV" enctype="multipart/form-data">
                    <div class="input-row">
                        <label class="col-md-4 control-label">Insert into StateZip Table</label> 
                        <input type="file" name="file" id="file" accept=".csv">
                        <button type="submit" id="submit" name="import-zip" class="btn-primary">Import</button>
                        <br/>
                    </div>
                </form>
                <br/>

                <form class="form-horizontal" action="" method="post" name="uploadCSV2" enctype="multipart/form-data">
                    <div class="input-row">
                        <label class="col-md-4 control-label">Insert into TaxRate Table</label> 
                        <input type="file" name="file2" id="file2" accept=".csv">
                        <button type="submit" id="submit2" name="import-tax" class="btn-primary">Import</button>
                        <br/>
                    </div>
                </form>
                <br/>

                <form class="form-horizontal" action="" method="post" name="uploadCSV3" enctype="multipart/form-data">
                    <div class="input-row">
                        <label class="col-md-4 control-label">Insert into Product Table</label> 
                        <input type="file" name="file3" id="file3" accept=".csv">
                        <button type="submit" id="submit3" name="import-inventory" class="btn-primary">Import</button>
                        <br/>
                    </div>
                </form>

            </div>
            <div class="col-3"></div>
        </div>


        <script type="text/javascript">
            $(document).ready(
            function() {
                $("#frmCSVImport").on(
                "submit",
                function() {

                    $("#response").attr("class", "");
                    $("#response").html("");
                    var fileType = ".csv";
                    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
                            + fileType + ")$");
                    if (!regex.test($("#file").val().toLowerCase())) {
                        $("#response").addClass("error");
                        $("#response").addClass("display-block");
                        $("#response").html(
                                "Invalid File. Upload : <b>" + fileType
                                        + "</b> Files.");
                        return false;
                    }
                    return true;
                });
            });
        </script>
    </body>
</html>