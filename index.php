<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
    body {
        background-image: url('asset/bg_image.png');
        background-repeat: no-repeat;
        background-position: center top;


    }
    </style>
</head>

<body>
    <div class="container-fluid">

        <a href="http://www.coral.co.uk"><img src="./asset/logo.png" class="brand" alt=""></a>
        <input type="text" class="login-field" placeholder="I'm Already a Customer"><button
            class="btn-login">Login</button>
        <div class="container">
            <img src="./asset/centerbanner.png" alt="" class="banner">
        </div>
        <div class="text-block">
            <div class="main-text">
                <h5>LIVERPOOL v AUGBURG</h5>
                <h2>LIVERPOOL TO WIN</h2>
                <h2>IN 90 MINS</h2>
                <h1>8/1</h1>
                <p>£/E 5 bet only | plus £/E free bet should your bet loose</p>

            </div>
            <label for="text" id="validate"></label>
            <div class="email"><input type="text" placeholder="Email" id="email_entered" onblur="validateemail();">
            </div>
            <button class="btn-betnow"> <a href="http://www.coral.co.uk/register.">Bet now >></a></button>
        </div>
    </div>
    </div>
    <div class="container step-block">
        <div class="row">
            <div class="step col-sm-4">
                <div class="step-1  cycle trans">
                    <h1>1</h1>
                </div>
                <h3 class="step-text">Register &<br>
                    deposit £/E5<br>or more </h3>

            </div>
            <div class="step col-sm-4">
                <div class="step-1 cycle trans">
                    <h1>2</h1>
                </div>
                <h3 class="step-text">your enhanced<br>
                    odds will<br>display on the<br>
                    homepage</h3>

            </div>
            <div class="step col-sm-4" style="margin-top:-15px">
                <div class="step-1 cycle trans">
                    <h1>3</h1>
                </div>
                <h3 class="step-text">if your bet<br>
                    wins your winnings<br>will be paid as<br> a £/E40 free bet </h3>


            </div>
            <div class="step col-sm-4">

            </div>
            <div class="step col-sm-4">

                <div class="block-footer">
                    <img src="./asset/gamble_aware.png" alt="">
                    <p> &#9658; <a href="about.php" class="trigger-about">
                            About Coral Sports Betting |
                        </a> <a href=""> Terms&Conditions</a></p>
                </div>
            </div>

        </div>
        <div class="step col-sm-4">

        </div>

        </ </div>


    </div>
    </div>
    </div>
    <script src="./js/script.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>