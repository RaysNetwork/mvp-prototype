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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

</head>
<body>
<header class=" bg-radient">
    <div class="container-fluid p-3">
        <div class="row ">
            <div class=" col-md-1 col-sm-12 mt-2 text-center">
                <a href="#">
                    <img src="images/logoLeft.png" alt="leftlogo" height="50">
                </a>
            </div>
            <div class=" col-md-4 col-sm-12 mt-2 text-left">
                <h1 class=" text-white text-uppercase text-russone">Rays 2s Wallet</h1>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="p-md-3 text-center">
        <div class="r4 row bgg2 sd">
            <div class="col-sm-12 col-md-8 offset-md-2 py-3">
                <div class="row">
                    <div class="col-sm-12 col-md-4 offset-md-4">
                        <button class="iconParent form-control p-button"><i class="fas fa-unlock-alt iconChild"></i> login</button>
                    </div>
                </div>

                <h1 class="text-russone text-center text-uppercase font-weight-bold mt-2 mb-4" >
                    Login to existing account
                </h1>
                <h6 class="text-center my-4">
                    Don't yet have a Wallet?<a href="#">Create New Wallet</a>
                </h6>
            </div>
            <div class="col-sm-12 col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-sm-12 col-md-4 p-0 my-1 offset-md-4">
                        <button class=" form-control pinkBtn rounded-0 p-2 text-uppercase text-russone">Login with private key</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 offset-md-2">
                <form method="post" action="{{ route('login') }}">
                    {!! csrf_field() !!}
                <div class="row bg-green-50 p-3">
                    <div class="col-sm-12 col-md-8 offset-md-2 ">
                        <input name="private_key" type="text" class="input-group-text form-control bg-white" placeholder="Enter your Private Key">
                    </div>
                </div>
                <div class="row bg-Gray p-4">
                    <div class="col-4 mt-3 offset-4">
                        <div class="row">
                            <div class="col-12">
                                <button class="iconParent form-control p-button mb-3">
                                    <i class="fas fa-check iconChild"></i>
                                    Confirm login
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-left">
                                <a href="#">Need help</a>
                            </div>

                            <div class="col-6 text-right">
                                <a href="#">Other Services</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <h6 class="text-danger text-russone text-uppercase font-weight-bold mb-4 text-center w-100">
                <!--Authentication is failed !!! incorrect parameters ! please, try again. Attempt left 3.-->
                @if ($errors->has('private_key'))
                        {{ $errors->first('private_key') }}
                @endif
            </h6>
            <h6 class="text-danger text-russone text-uppercase font-weight-bold fs text-center w-100 mb-5">
                After all the failed attempts the account will be deactivated for 30 min - 24 hours.
            </h6>
        </div>
    </div>
</div>
</div>
</body>
</html>