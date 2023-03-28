<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js">
</head>
<body>
       <div class="container">
        <div class="row">
          <div class="column1">
            <div class="logo">
              <img src="https://lh3.googleusercontent.com/p/AF1QipNRzVzi05qpEN5exSWTx8pkdB3VYkogThaPxpUp=w1080-h608-p-no-v0" alt="">
            </div>
          </div>

          <div class="column1">
            <div class="navbar">
              <nav>
                <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">About us</a></li>
                  <li><a href="">Contact us</a></li>
                  <li><a href="">More</a></li>
                  <li><a href="">Skill</a></li>

                </ul>
              </nav>
            </div>
          </div>
        </div>
       </div>
</body>
</html>
<style>
  
  .container{
    background-color: gray;
  }
  .logo img{
    width: 100px;
  }
  .column1{
    width: 40%;
   
    float: left;
  }
  .column2{
    width: 40%;
    
    float: right;
    
  }

 .navbar{

 }
 nav ul{
  display: inline-flex;

 }
 ul li{
  list-style: none;
 }
 ul li a{
  text-decoration: none;
 }
  @media only screen and (max-width: 800px) {
  body {
    background-color: lightblue;
  }
  .navbar a{
           display: flex;
           flex-direction: column;
  }
  nav ul li a{
    text-align: center;
  }
}
</style>