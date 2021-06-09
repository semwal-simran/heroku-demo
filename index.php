<?<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>

    <nav>
        <ul class="topnav" id="drop">
            <li><a href="#home">HOME</a></li>
            <li><a href="#news">NEWS</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li class="topnav-right"><a href="#signup">SIGN UP</a></li>
            <li class="topnav-right"><a href="#signin">SIGN IN</a></li>
            <li class="ham"><a href="javascript:void(0);" onclick="ddown()">&#9776;</a></li>
        </ul>
    </nav>
     
    <!-- Form section -->
    <div class="container" id="sec1">
        
        <div class="row">

            <div class="col-6">
                <div class="left">
                    <h1 class="large">Crazy World</h1>
                    <h1 class="large">Made for developers</h1>
                </div>

                <form action="">
                    <div class="left">
                        <h2>Username</h2>
                        <input name="user" placeholder="Username" type="text" class="ipbox">
                        <h2>Password</h2>
                        <input name="pword" placeholder="Password" type="text" class="ipbox">

                    </div>
                </form>
            </div>

            <div class="col-6 ">
                <div class="right">
                    <div class="mob">
                        <iframe width="500" height="315" src="https://www.youtube.com/embed/KMOmw19ZCGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
    <script>

        function ddown()
        {
            var x=document.getElementById("drop");
            if (x.className === "topnav")
            {
                x.className += " responsive";
            }
            else
            {
                x.getElementsByClassName="topnav";
            }
        }
    </script>

</body>
</html>


<!-- we can style unicode just like text  -->
?>