<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('forcss/css/login.css') }}">
</head>
<body>
    <div class="container">
        <form action="">
            <label class="l1" for="effect-7">Email:</label>
            <div class="col-3">
                <input class="effect-7" type="Email" placeholder="Email">
                  <span class="focus-border">
                    <i></i>
                  </span>
              </div>
              <label class="l2" for="effectx-7">Password:</label>
              <div class="col-4">
                <input class="effect-7" id="os" type="password" placeholder="Password">
                  <span class="focus-border">
                    <i></i>
                  </span>
              </div>
            </form>
            <button class="pulse">Login</button>

            <img class="imgs" src="{{ asset('forcss/img/logo-tb.png') }}" alt="">
            <img class="kik" src="{{ asset('forcss/img/maskot1.png') }}" alt="">
    </div>
</body>
</html>