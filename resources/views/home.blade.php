<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSD Form</title>
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <style>
        body{
            background: #e3effb;
        }
    </style>
</head>
<body>
<header class=" bg-radient">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-1 col-sm-12 mt-2 text-center">
                <a href="#">
                    <img src="images/logoLeft.png" alt="leftlogo" height="50">
                </a>
            </div>
            <div class=" col-md-4 col-sm-12 mt-2 text-left">
                <h1 class=" text-white text-uppercase">Rays 2s Wallet</h1>
            </div>
            <div class="col-sm-12 col-md-1 offset-md-6 text-center">
                <a href="#" class="d-block">
                    <img src="images/logoRight.png" alt="leftlogo" height="70">
                </a>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid " >
    <div class="whiteGradient2 round-2 px-3">
        <div class="row py-3">
            <div class="col-sm-4 col-md-2">
                <label for="2sWalletAddress" class=" font-weight-bold text-uppercase">2s Wallet Address</label>
            </div>
            <div class="col-sm-8 col-md-4">
                <input value="{{Auth::user()->public_key}}" type="text" class="bg-firstColor w-100" id="2sWalletAddress">
            </div>
            <div class="col-sm-4 col-md-2">
                <label for="raysBallance" class=" font-weight-bold text-uppercase">Rays Ballance</label>
            </div>
            <div class="col-sm-8 col-md-4">
                <input value="{{Auth::user()->balance}}" type="text" class="bg-firstColor w-100" id="raysBallance">
            </div>
        </div>
    </div>
</div>
<div class="bg-radient2">
    <div class="container-fluid">
        <nav class="navbar-expand-md navbar-light navbar">
            <button type="button" class="navbar-toggler ml-auto bg-firstColor" data-target="#navbarthatCollapse" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse text-center" id="navbarthatCollapse">
                <ul class="navbarLinks w-100 ">
                    <li>
                        <a href="#" class="d-block  text-uppercase active">
                            Send Rays
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-block  text-uppercase">
                            multi transaction
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-block  text-uppercase">
                            history
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-block  text-uppercase">
                            Saved addresses
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container-fluid my-2">
    <div class="px-2">
        <div class="row">
            <div class="col-sm-12 col-md-5 p-1">
                <div class=" round-4 whiteGradient pt-3 px-3">
                   <form action="{!! route('transmit') !!}" method="post">
                       {!! csrf_field() !!}
                       <h4 class="mt-2 text-center text-uppercase">Transmit Rays</h4>
                       @if(count($errors)>0)
                           <div class="alert alert-danger">
                           @foreach ($errors->all() as $error)
                               <div>{{ $error }}</div>
                           @endforeach
                           </div>
                       @endif
                       <div class="row mt-2">
                           <label for="receiverAddress" class="col-sm-12 col-md-4">Receiver address</label>
                           <div class="col-sm-12 col-md-8 form-group">
                               <input name="receiver_address" type="text" class="w-100 bg-gray" id="receiverAddress">
                           </div>
                       </div>
                       <div class="row">
                           <label for="raysAmount" class="col-sm-12 col-md-4">RAYS Amount</label>
                           <div class="col-sm-12 col-md-6 form-group">
                               <input name="amount" type="text" class="w-100 bg-gray" id="raysAmount">
                           </div>
                       </div>
                       <div class="row">
                           <label for="digital Id" class="col-sm-12 col-md-4 m-0">Digital ID</label>
                           <div class="col-sm-12 col-md-6 form-group m-0">
                               <input name="digital_id" type="text" class="w-100 bg-gray" id="digitalId">
                           </div>
                           <div class="col-sm-12 col-md-2 text-center p-0">
                               <button class="btn btn-light bg-firstColor text-center text-uppercase" id="transmitArraySend">SEND</button>
                           </div>
                       </div>
                       <div class="row">
                           <div class="offset-md-4 col-sm-12 col-md-8">
                               <input name="make_pricate" type="checkbox" class="cb" id="check1">
                               <label for="check1" class="label">Make your transaction Private</label>
                           </div>
                       </div>
                   </form>
                </div>
                <div class=" round-4 whiteGradient mt-1 px-3 pt-3">
                    <h4 class="text-center text-uppercase">rays explorer</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-9 offset-md-1 form-group">
                            <input type="text" class="w-100 bg-gray text-center" id="transactionMessage" value="YOUR TRANSACTION IS SUCCESSFUL">
                        </div>
                    </div>
                    <div class="row pb-1">
                        <label for="blockHeight" class="col-sm-12 col-md-4">Block height</label>
                        <div class="col-sm-12 col-md-5 form-group">
                            <input type="text" class="w-100 bg-gray" id="blockHeight">
                        </div>
                    </div>
                    <div class="row">
                        <label for="timestamp" class="col-sm-12 col-md-4">Timestamp</label>
                        <div class="col-sm-12 col-md-5 form-group">
                            <input type="text" class="w-100 bg-gray" id="timestamp">
                        </div>
                        <div class="col-sm-12 col-md-2 text-center mb-3 pb-2">
                            <button class="btn btn-light bg-firstColor text-center text-uppercase" id="raysExplorerDetail">DETAILS</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class=" round-4 whiteGradient p-4">
                    <h4 class="my-1 text-center text-uppercase">overview</h4>
                    <p class=" text-uppercase my-1">recent deposits</p>
                    <table class="table table-borderless table-sm">
                        <thead>
                        <tr>
                            <th style="width: 50%;" class="text-center text-capitalize p-0">from</th>
                            <th style="width: 25%;" class="text-center text-capitalize p-0">amount</th>
                            <th style="width: 25%;" class="text-center text-capitalize p-0">Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposites as $d)
                        <tr>
                            <td class="p-0">
                                <input value="{{$d->target_key}}" type="text" class="w-100 bg-gray" id="depFrom1">
                            </td>
                            <td class="p-0">
                                <input value="{{$d->amount}}" type="text" class="w-100 bg-gray" id="depAmount1">
                            </td>
                            <td class="p-0">
                                <input value="{{$d->balance}}" type="text" class="w-100 bg-gray" id="depBalance1">
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class=" text-uppercase my-1">Recent withdrawals</p>
                    <table class="table table-borderless table-sm">
                        <thead>
                        <tr>
                            <th style="width: 50%;" class="text-center text-capitalize p-0">to</th>
                            <th style="width: 25%;" class="text-center text-capitalize p-0">amount</th>
                            <th style="width: 25%;" class="text-center text-capitalize p-0">Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $w)
                        <tr>
                            <td class="p-0">
                                <input value="{{$w->target_key}}" type="text" class="w-100 bg-gray" id="withFrom1">
                            </td>
                            <td class="p-0">
                                <input value="{{$w->amount}}" type="text" class="w-100 bg-gray" id="withAmount1">
                            </td>
                            <td class="p-0">
                                <input value="{{$d->balance}}" type="text" class="w-100 bg-gray" id="withBalance1">
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-4 offset-md-8 text-center">
                            <button class="btn btn-light bg-firstColor text-center text-uppercase" id="dverviewDetail">DETAILS</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>