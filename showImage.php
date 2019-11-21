
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-3"></div>
                <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #888;border: blanchedalmond 1px solid;">
                    
                    <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" >QR_Code</h3>
                            </div>
                            <div class="panel-body" >
                                <?php if(isset($_POST['text_data']) && $_POST['text_data'] != '') { ?>
                                    <img src="generate.php?text=<?php echo $_POST['text_data']; ?>" class="img-responsive" style="text-align: center;" alt="Image">
                                    <br>
                                <?php } if (basename($_FILES["image_data"]["name"]) != '') {
                                    // $target_file ='./images/'.$_FILES["image_data"]["name"];
                                    // // var_dump($_FILES["image_data"]["name"]); die();
                                    // move_uploaded_file($_FILES["image_data"]["tmp_name"], $target_file);
                                    $image = $_FILES["image_data"]["tmp_name"];
                                    include 'decode.php';
                               
                                } else {
                                    header('location: index.php');
                                } ?>
                                <br>
                                <a href="index.php" class="btn btn-danger btn-block">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
