<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class=" bg-radient">
    <div class="container-fluid p-3">
        <div class="row ">
            <div class=" col-md-12 col-sm-12 mt-2 text-center ">
                <h1 class=" text-white text-uppercase text-russone">Rays 2s Wallet</h1>
            </div>
            <div class=" col-md-12 col-sm-12 mt-2 text-center">
                <a href="#">
                    <img src="images/logoLeft.png" alt="leftlogo" height="50">
                </a>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="p-5 sd bg-Gray mb-4 r2"></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 col-md-6">
            <div class="p-5 sd bgg2 r4 ">
                <i class="fas fa-check text-center d-block w-100 mt-5 tickIcon"></i>
                <button onclick="location.href='/login'" class="btn p-button py-3 w-100 mt-4 text-russone border">
                    login to existing wallet
                </button>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="p-5 sd bgg2 r4">
                <i class="fas fa-plus text-center d-block w-100 mt-5 tickIcon"></i>
                <button onclick="location.href='/register'" class="btn p-button py-3 w-100 mt-4 text-russone border">
                    create a new wallet
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>