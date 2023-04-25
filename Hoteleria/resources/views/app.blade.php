<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hotel Management</title>
    <link rel="shortcut icon" href="{{ url('/images/edificio-del-hotel.png') }}" />

    <style>
        body{
            margin: 0;

            padding: 0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: #00B4DB;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: underline;
            
        }
        .Nav1{
            border: 1px solid blue; 
            width: 100%; 
            height: 6vh;
           
            
        }


    </style>


</head>
<body>
    <nav class=" Nav1 navbar navbar-expand-lg navbar-light bg-light p-0" >

        <div class="container-fluid">
            

            <div class="collapse ms-2" id="navbarNav" style="display:flex; justify-content: flex-start; width:30%">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('Hotels')}}" style="text-decoration: underline;">Registrar Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('Ver_Hotels')}}" style="text-decoration: underline;">Ver Hoteles</a>
                    </li>
                    
                </ul>
            </div>
            <div style="display:flex; justify-content:center; width:30%;">
                <img style="width: 24%;" src="{{ url('/images/Decameron_Logo.png') }}" alt="">
            </div>
            <div class="me-2" style="display:flex; justify-content:flex-end; width: 30%;">
                <a class="navbar-brand" href="#">DECAMERON - Hotel Management</a>
            </div>
        </div>
    </nav>

    @yield('content')
    

</body>
</html>