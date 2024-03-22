<?php 

//Receiver email address
$to = "jenifferz@magicajen.com";
//headers

$headers = "From: {$_POST['firstName']} {$_POST['lastName']} <{$_POST['email']}> \r\n";
$headers .= "Reply-To: {$_POST['email']} \r\n";
$headers .= "Content-type: text/html \r\n";

$subject = $_POST['subject'];
$message = wordwrap($_POST['body'], 70 , "\r\n");

mail($to,$subject, $message, $headers);

?>

<script type = "text/javascript">
    function redirect(){
        window.location.replace("index.php");
    }
</script>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body onload ="setTimeout('redirect()', 5000)">
    <div class="container-lg justify-content-center align-items-center">
        <div class="row align-items-center"  style = "height: 95vh">
            <div class="col-xl-12 col-lg-12 text-center">
                <h1 class="display-1">
                    We will get back to you soon. 
                </h1>
                <h1 class="display-5">
                    Redirecting...
                </h1>
            </div>
        </div>

    </div>
    <?php include('footer.php');?>
</body>

</html>