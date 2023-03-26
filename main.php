<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Redirect function</title>
   <style type="text/css">
        input{
         margin-top:20px;
         margin-left:5px 20px;
         padding:10px;
         border-radius:5px;
      }
      .btn{
         color: white;
         background: blue;
         padding: 8px 39px;
         cursor: pointer;
         border-radius: 25px;
         font-size: medium;
         transform:.5;
      }
      .btn:hover{
         background:tomato;
         color:white;
         transition:.5;
      }
      .dibi{
            margin-top:200px;
            width: 400px;
            height:200px;
            margin:auto;
            text-align: center;
            margin-top: 15%;
      }
      .dibi .kujun{
         background: blue;
         color: white;
         border-radius: 50px;
         padding: 2px 16px;
         display: inline-block;
         width: 124px;
         height: 84px;
                  
        
      }
      .user-input{
         width: 400px;
         border-radius: 30px;
      }
      img{
         height:50px;
         width: 50px;
      }
      .icon{
         margin-top:10px;
      }
      .icon ul{
         list-style-type:none;
      }
      .icon ul li{
         display:inline-block;
      }
   </style>
</head>
<body>

     <div class="dibi">
      <div class="kujun">
         <h2>S<img src="./Icon/search.png" alt="not found">Me</h2>
      </div>
     <form action="login.php" method="post">
         <input class="user-input" type="username" name="username" placeholder="Search Me" id="">
        
         <input class="btn" type="submit" name="submit" value="Search" id="">
      </form>
      <div class="icon">
         <ul>
            <li> <img src="./Icon/facebook.png" alt=""></li>
            <li>  <img src="./Icon/instagram.png" alt=""></li>
            <li> <img src="./Icon/badoo.png" alt=""></li>
            <li> <img src="./Icon/google-plus.png" alt=""></li>
            <li> <img src="./Icon/linkedin.png" alt=""></li>
            <li>  <img src="./Icon/pinterest.png" alt=""></li>
         </ul>
      </div>
     </div>
   
</body>
</html>