<?php

$data = "QrCode Gen";

if(isset($_GET['qrcode'])){
    $data = $_GET['qrcode'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QrCode Generator</title>

    <!-- Bootstrap css file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Add more margin -->
    <style>
    .mt-6 {
    margin-top: 6rem;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 35%;
}

    </style>
</head>
<body class="bg-dark">
<div class="container rounded border bg-white mt-6">

<!-- Qrcode image  -->
<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo $data;?>&choe=UTF-8" alt="QrCode" class="center" >

<!-- user input to generate QrCode -->
<form action="index" method="get" class="">
<input type="text" name="qrcode" class="form-control" placeholder="Some Text.." required>
  <div class="row">
    <div class="col text-center">
<input type="submit" value="Get Qrcode" class="btn btn-primary mt-2 mb-2">
</div>
</div>
</form>
</div>
</body>
</html>