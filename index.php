<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- link to css -->
    <link rel="stylesheet" href="style.css" />
    <!-- link font awesome -->
    <script src="https://kit.fontawesome.com/b0a60d99d5.js" crossorigin="anonymous"></script>
    <!-- link to bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Currency converter</title>
</head>
<body>
    <!-- header  -->
        <!-- navbar -->
        <!-- <ul>
            <li><a href="#"><i class="fa-solid fa-money-bill-wave"></i> Home</a></li>
        </ul> -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="dream.php"><i class="fa-solid fa-money-bill-wave"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/ch-sophie?tab=repositories"> Page</a>
        </ul>
        </div>
    </div>
    </nav>

    <!-- main body -->
    <div class="container">
    <h1>Currency converter</h1>
    
    <form action='dream.php' method='post'>
        <label for="currency">Amount </label>
            <input type="text" name="currency">
            <br>
            <br>
            <label for="from">From </label>
            <select name='curr1'>
            <option value='euro'>Euro €</option>
            <option value='cny'>Chinese Yuan ¥</option>
            <option value='jpy'>Japanese Yen ¥</option>
            <option value='usd'>US Dollar $</option>
            <option value='gbp'>British Pound £</option>
            <option value='aud'>Australian Dollar $</option>
            <option value='sgd'>Singapore Dollar $</option>
            <option value='clp'>Chilean Peso $</option>
            </select>
            <br>
            <br>
            <label for="to">To </label>
            <select name='curr2'>
            <option value='euro'>Euro €</option>
            <option value='cny'>Chinese Yuan ¥</option>
            <option value='jpy'>Japanese Yen ¥</option>
            <option value='usd'>US Dollar $</option>
            <option value='gbp'>British Pound £</option>
            <option value='aud'>Australian Dollar $</option>
            <option value='sgd'>Singapore Dollar $</option>
            <option value='clp'>Chilean Peso $</option>
            </select>
            <br>
            <br>
            <input type="submit" name="submit" value="Convert currency">
            <br>
            <br>
    </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $amount = $_POST['currency'];
        $currency1 = $_POST['curr1'];
        $currency2 = $_POST['curr2'];
        
        // must enter a number
        if(empty($amount)){
            echo "<center>" . "Must enter a number" . "</center>";
        }
        elseif($currency1 == "euro" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 7.00623 . " CNY " . "</center>";
        }
        elseif($currency1 == "cny" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 0.142730 . " EUR " . "</center>";
        }
        elseif($currency1 == "euro" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 0.142730 . " JPY " . "</center>";
        }
        elseif($currency1 == 'jpy' && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 0.142730 . " EUR " . "</center>";
        }
        // From EURO to
        elseif($currency1 == "euro" && $currency2 == "usd"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 1.046005 . " USD " . "</center>";
        }
        elseif($currency1 == "euro" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 0.865923 . " GBP " . "</center>";
        }
        elseif($currency1 == "euro" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 1.53550 . " AUD " . "</center>";
        }
        elseif($currency1 == "euro" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 1.45806 . " SGD " . "</center>";
        }
        elseif($currency1 == "euro" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " EUR " . " = " . $amount * 958.816 . " CLP " . "</center>";
        }
        // From USD to
        elseif($currency1 == "usd" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 0.955912 . " EUR " . "</center>";
        }
        elseif($currency1 == "usd" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 6.70161 . " CNY " . "</center>";
        }
        elseif($currency1 == "usd" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 135.318 . " JPY " . "</center>";
        }
        elseif($currency1 == "usd" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 0.830598 . " GBP " . "</center>";
        }
        elseif($currency1 == "usd" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 1.47404 . " AUD " . "</center>";
        }
        elseif($currency1 == "usd" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 1.39574 . " SGD " . "</center>";
        }
        elseif($currency1 == "usd" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " USD " . " = " . $amount * 918.365 . " CLP " . "</center>";
        }
        // From CNY to
        elseif($currency1 == "cny" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 20.1824 . " JPY " . "</center>";
        }
        elseif($currency1 == "cny" && $currency2 == "usd"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 0.14917 . " USD " . "</center>";
        }
        elseif($currency1 == "cny" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 0.12399 . " GBP " . "</center>";
        }
        elseif($currency1 == "cny" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 0.22007 . " AUD " . "</center>";
        }
        elseif($currency1 == "cny" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 0.20832 . " SGD " . "</center>";
        }
        elseif($currency1 == "cny" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " CNY " . " = " . $amount * 137.312 . " CLP " . "</center>";
        }
        // From JPY to
        elseif($currency1 == "jpy" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 0.04955 . " CNY " . "</center>";
        }
        elseif($currency1 == "jpy" && $currency2 == "usd"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 0.00739 . " USD " . "</center>";
        }
        elseif($currency1 == "jpy" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 0.00614 . " GBP " . "</center>";
        }
        elseif($currency1 == "jpy" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 0.01089 . " AUD " . "</center>";
        }
        elseif($currency1 == "jpy" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 0.01031 . " SGD " . "</center>";
        }
        elseif($currency1 == "jpy" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " JPY " . " = " . $amount * 6.84249 . " CLP " . "</center>";
        }
        // From GBP to
        elseif($currency1 == "gbp" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 1.15374 . " EUR " . "</center>";
        }
        elseif($currency1 == "gbp" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 8.07122 . " CNY " . "</center>";
        }
        elseif($currency1 == "gbp" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 162.874 . " JPY " . "</center>";
        }
        elseif($currency1 == "gbp" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 1.20428 . " USD " . "</center>";
        }
        elseif($currency1 == "gbp" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 1.77492 . " AUD " . "</center>";
        }
        elseif($currency1 == "gbp" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 1.68094 . " SGD " . "</center>";
        }
        elseif($currency1 == "gbp" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " GBP " . " = " . $amount * 1112.87 . " CLP " . "</center>";
        }
        // From AUD to
        elseif($currency1 == "aud" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 0.65004 . " EUR " . "</center>";
        }
        elseif($currency1 == "aud" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 4.54661 . " EUR " . "</center>";
        }
        elseif($currency1 == "aud" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 91.7371 . " JPY " . "</center>";
        }
        elseif($currency1 == "aud" && $currency2 == "usd"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 0.67831 . " USD " . "</center>";
        }
        elseif($currency1 == "aud" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 0.56339 . " GBP " . "</center>";
        }
        elseif($currency1 == "aud" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 0.94725 . " SGD " . "</center>";
        }
        elseif($currency1 == "aud" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " AUD " . " = " . $amount * 626.412 . " CLP " . "</center>";
        }
        // From SGD to
        elseif($currency1 == "sgd" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 0.68658 . " EUR " . "</center>";
        }
        elseif($currency1 == "sgd" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 4.79934 . " CNY " . "</center>";
        }
        elseif($currency1 == "sgd" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 96.8293 . " JPY " . "</center>";
        }
        elseif($currency1 == "sgd" && $currency2 == "usd"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 0.71598 . " USD " . "</center>";
        }
        elseif($currency1 == "sgd" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 0.59510 . " GBP " . "</center>";
        }
        elseif($currency1 == "sgd" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 1.05635 . " AUD " . "</center>";
        }
        elseif($currency1 == "sgd" && $currency2 == "clp"){
            echo "<center>" . "Your amount is: " . $amount . " SGD " . " = " . $amount * 662.505 . " CLP " . "</center>";
        }
        // From CLP to
        elseif($currency1 == "clp" && $currency2 == "euro"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.001036 . " EUR " . "</center>";
        }
        elseif($currency1 == "clp" && $currency2 == "cny"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.007245 . " EUR " . "</center>";
        }
        elseif($currency1 == "clp" && $currency2 == "jpy"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.146108 . " JPY " . "</center>";
        }
        elseif($currency1 == "clp" && $currency2 == "usd"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.001080 . " USD " . "</center>";
        }
        elseif($currency1 == "clp" && $currency2 == "gbp"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.000898 . " GBP " . "</center>";
        }
        elseif($currency1 == "clp" && $currency2 == "aud"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.001594 . " AUD " . "</center>";
        }
        elseif($currency1 == "clp" && $currency2 == "sgd"){
            echo "<center>" . "Your amount is: " . $amount . " CLP " . " = " . $amount * 0.001508 . " SGD " . "</center>";
        }
        // else not valid
        else{
            echo "<center>" . "Sorry not available" . "</center>";
        }
    }
    ?>

    <!-- footer -->
    <footer class="bg-light text-center text-sm-start">
        <div class="text-center p-3">
        <i class="fa-regular fa-copyright"></i> 2022
        </div>
    </footer>

</body>
</html>