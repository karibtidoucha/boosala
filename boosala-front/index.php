<!DOCTYPE html>
<html>
<head>
    <!-- /*~~~~~ BOOSALA. Website ~~~~~*/ -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Bring home the lost"/>
    <meta name="keywords" content="lost, missed, person"> 
    <title>Boosala | Bring home the lost</title>
    <link rel="icon" href="images/logos/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
    <section id="home">
        <div class="container">
            <div id="logo-div" class="col-lg-6 col-md-6 col-xs-12 align-left">
                <img id="logo" src="images/logo.png" />
            </div>
            <div id="main" class="col-lg-6 col-md-6 col-xs-12 align-right vertical-center">
            <h5>Boosala</h5>
            <h4>Bring home the lost</h4>
            <button id="start">Start</button>
            </div>
        </div>
    </section>

    <section id="search">
        <a id="back"><img src="images/arrow-left.png" alt="go-back" /></a>        
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2 col-md-6 col-xs-12 align-center">
                <img id="logo" src="images/logo.png" />
                <h5>My name is <input type="text" name="me" placeholder="Your name"> and
                <br/>
                I'm looking for <input type="text" name="him" placeholder="Their name">.</h5>
                <div id="secondary" class="col-lg-6 col-md-6 col-xs-12 align-right">
                    <!--index.php -->
                    <!-- <form enctype="multipart/form-data" action="" method="POST">  -->
                        <label for="file-upload">
                            <img id="picture" src="images/face.jpeg" alt="Their"/>
                        </label>
                        <input id="file-upload" type='file' name="uploaded_file" onchange="readURL(this);" />
                </div>
                        <div id="send" class="col-lg-6 col-md-6 col-xs-12 align-left">
                            <button id="submit" name="submit">Submit My Information</button>
                        </div>
                    <!-- </form> -->
                <?PHP
                  // if(!empty($_FILES['uploaded_file'])){
                  //   $path = "images/uploads/";
                  //   $path = $path . basename( $_FILES['uploaded_file']['name']);
                  //   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                  //     echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
                  //     " has been uploaded";
                  //   }else{
                  //       echo "";
                  //   }
                  // }
                ?>
            </div>
            </div>
        </div>
    </section>

    <section id="result">
        <a id="back">X</a>        
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2 col-md-6 col-xs-12 align-center">
                <img id="logo" src="images/logo.png" />
                <h5>FOUND</h5>
                <h4>John may have been located at Damas on Monday, 29 March 2017</h4>
                <iframe
                  width="450"
                  height="300"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBAoGZUjYuhCmqwNIJH3FhoSTufZ-wjC6U
                    &q=Space+Needle,Seattle+WA" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>


    <!--~~~~~ JS Assets ~~~~~-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>