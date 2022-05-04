<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfac/loginpage</title>
    <link href="../css/register.css"  rel="stylesheet" >
    <link href="../css/footer.css" rel="stylesheet">


</head>
<body>
    <div class="navbar">
        <div>
            <h1>
                ComFac
            </h1>
        </div>
        <div class="navbox">
            <button><a href="{{route('home')}}">Home</a></button>
        </div>
    </div>
    <div class="register-form">
        <form action="{{route('postlogin')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <input type="text" placeholder="Username" name="name">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="Submit">  
        </form>
    </div>
    <footer>
        <div class="footer-div">
            <a class="footer-links" href="#">About</a>
            <a class="footer-links" href="#">Comfac</a>
            <a class="footer-links" href="#">Top 100</a>
            <div class="footer-intro">
                <p>BWF Production For Tula's Student Only, Dehradun</p>
                <p>&copy Copyright 2022,From BWF with Love!!</p>
            </div>
        </div>
    </footer>
</body>
</html>

