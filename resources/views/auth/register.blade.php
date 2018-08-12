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
        <div class="r4 row bgg sd">
            <div class="col-sm-12 col-md-8 offset-md-2 py-3">
                @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                <form method="post" action="{{ route('register') }}">
                    {!! csrf_field() !!}
                    <h6>Enter a Nine Digital ID,containing only Numbers from 0 to 9 e.g. 245876214</h6>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 offset-md-1 form-group">
                            <input type="text" class="input-group-text form-control" name="digital_id" placeholder="Enter Digital ID">
                        </div>
                        <div class="col-sm-12 col-md-5 form-group">
                            <input type="text" class="input-group-text form-control" name="digital_id_confirmation" placeholder="Confirm Digital ID">
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-4 col-sm-12 col-md-8">
                            <input type="checkbox" class="cb" id="check1">
                            <label for="check1" class="label">Make your transaction Private</label>
                        </div>
                    </div>
                    <p class="text-danger text-russone text-uppercase font-weight-bold fs">Important! Do not forget this digital id. otherwise, you will not be able to withdraw your crypto assets</p>
                    <h6>Enter Generate a Random Mnemonic or Enter <b class="text-danger">12-24 Words</b> i.e. 12-24 Words</h6>
                    <div class="row">
                        <div class="col-sm-12 col-md-10 offset-md-1 form-group">
                            <input name="string_input" type="text" class="input-group-text form-control" value="the quick brown fox jumps over the lazy dog">
                        </div>
                    </div>
                    <p class="text-danger text-russone text-uppercase font-weight-bold pb-3 fs">Keep it Safe, remember and don't lose it. needed for private key recovery if lost</p>
                    <div class="row">
                        <label for="raysSelect" class="col-sm-12 col-md-2 text-md-right">Coin</label>
                        <div class="col-sm-12 col-md-3 form-group">
                            <select id="raysSelect" class="form-control w-100">
                                <option value="Rays">-RAYS-</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 form-group">
                            <button class="btn w-100 p-button" id="generate">Generate</button>
                        </div>
                        <div class="col-sm-12 col-md-2 form-group">
                            <select id="raysSelect" class="form-control w-100">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <label for="raysSelect" class="text-md-left col-sm-12 col-md-2">Words</label>
                    </div>
                    <div class="row r4 bg-Gray sd px-md-5 py-4 text-purpal mb-3">
                        <label for="address" class="col-sm-2 col-md-2">Address</label>
                        <div class="col-sm-10 col-md-10 form-group">
                            <input type="text" class="form-control bg-green" value="{{isset($address) ? $address : ''}}">
                        </div>
                        <label for="address" class="col-sm-2 col-md-2">Public Key</label>
                        <div class="col-sm-10 col-md-10 form-group">
                            <input type="text" class="form-control bg-blue" value="{{isset($public_key) ? $public_key : ''}}">
                        </div>
                        <label for="address" class="col-sm-2 col-md-2">Private Key</label>
                        <div class="col-sm-10 col-md-10 form-group mb-0">
                            <input type="text" class="form-control bg-red" value="{{isset($private_key) ? $private_key : ''}}">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 form-group">
                        <button type="button" class="btn p-button">I have saved my Private Key and Digital ID. Take me to Wallet Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-6 offset-md-3 dataBelow">
                <ul class="text-left list-unstyled">
                    <li >
                        **Do not lose it!** It cannot br recovered when you lose it.
                    </li>
                    <li>
                        **Do not share it!** Your funds will be stolen if you use this file on the malicious/phishing site.
                    </li>

                    <li >
                        **Mabe a back up!** Secure it like a millions of dallars it may one day be worth.
                    </li>
                </ul>
            </div>
        </div>
        <h6 class="dataBelow">
            This wallet does not hold your keys for you. We cannot access accounts, recover keys, reset passwords, nor reverse transactions. Protect your keys and always check that you're on correct URL. You are responsible for your security.
        </h6>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>
</html>