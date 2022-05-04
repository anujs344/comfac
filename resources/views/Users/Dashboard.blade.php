<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfac/RegisterPage</title>
    <link href="{{asset('css/dashboard.css')}}"  rel="stylesheet" >
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">

</head>
<body>
    <div class="navbar">
        <div>
            <h1>
               Welcome To ComFac
            </h1>
        </div>
        <div class="navbox">
            <button><a href="{{route('home')}}">HOME</a></button>
            <button><a href="{{route('logout')}}">Logout</a></button>

        </div>
    </div>
    <div class="login-main">
        <h1>Hello {{$data->name}}</h1>
        <p>Photo Counter</p>
        <h2>Displayed:{{$data->views}}</h2>
        <h2>Selected:{{$data->hits}}</h2>
        <h2>Diselected:{{$data->dislikes}}<h2>
         
        <p>You are 
            @if (($data->hits/$data->hits)*100)
                {{($data->hits/$data->views)*100}}
            @else
                No yet registraion
            @endif
            % popular in your college</p>
        <span>!!Hot Girl/Boy!!</span>

        <p>Share it on instagram and facebook and show them how popular you are</p>
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






