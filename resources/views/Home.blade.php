<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfac</title>
    <link href="{{asset('css/index.css')}}"  rel="stylesheet" >
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div>
            <h1>
                ComFac
            </h1>
        </div>
        <div class="navbox">
            <button><a href="{{route('getregister')}}">Register</a></button>
            <button><a href="{{route('getlogin')}}">LOGIN</a></button>
        </div>
    </div>
    <div class="main">
        <div class="main-head">
            <p>
                Were we let in our looks? No we will be judged on them? Yes
            </p>
            <h2>Who is Hotter?Tulites</h2><p> Register yourself to see how much popular you are in Tulas!<br></p><h2>Click To Choose!</h2>
        </div>
        <div class="main-body">
               <div class="photo-body">
                   <div class="box photo1">
                       
                            <a href="/haayouselected/{{$leftimageid->id}}/{{$rightimageid->id}}"> <img src="{{asset('storage/images/'.$leftimageid->imagename)}}" style="width:200px;height:200px;border: 3px solid red;"></a>
                            <p>Name- {{$leftimageid->name}}  <br>Total hits- {{$leftimageid->hits}} peoples
                            <br>Total dislikes - {{$leftimageid->dislikes}}
                            </p>    
                      
                       
                   </div>
                   <h1>OR</h1>
                   <div class="box photo1">
                    <a href="/haayouselected/{{$rightimageid->id}}/{{$leftimageid->id}}"> <img src="{{asset('storage/images/'.$rightimageid->imagename)}}"  style="width:200px;height:200px;border: 3px solid red;"></a>
                    <p>Name- {{$rightimageid->name}}  <br>Total hits- {{$rightimageid->hits}} peoples
                        <br>Total dislikes - {{$rightimageid->dislikes}}
                    </p>
                  </div>
                  
               </div>

               <marquee behavior="scroll" direction="left" scrollamount="15"><h1 id="choose">!!Choose the one who look hotter!!</h1></marquee>
        </div>
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