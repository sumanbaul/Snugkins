<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Snugkins/Css/style.css">
    <link rel="stylesheet" href="/Snugkins/Css/styles.css">
    <link rel="stylesheet" href="/Snugkins/Css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">s
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Barlow:wght@600&family=Great+Vibes&family=Lobster&family=Montserrat:wght@100&family=Ole&display=swap');
        .form-wrapper {
            margin: 0;
            width: 95%;
            margin-top: 30px;
            background: #fff;
        }
        
        .input-wrapper {
            border: 1px solid #159d8f;
            width: 93%;
            margin-bottom: 15px;
            padding: 15px;
            text-align: center;
            color: #159d8f;
        }
        
        .result-wrapper {
            font-size: 20px;
            font-weight: bold;
            padding: 10px;
            background: #609460;
            color: blue;
        }
        
       
        
        h1.center {
            text-align: center;
        }
        
        .inputV {
            border: 1px solid #159d8f;
            color: #159d8f;
            font-size: 20px;
            margin: 0 5px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .inputS {
            -moz-user-select: none;
            background-image: none;
            border: 1px solid transparent;
            text-transform: uppercase;
            cursor: pointer;
            display: inline-block;
            font-weight: normal;
            padding: 10px;
            text-align: center;
            touch-action: manipulation;
            vertical-align: middle;
            white-space: nowrap;
            outline: none;
            font-size: 15px;
            width: 70%;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #fff !important;
            border: 2px solid #159d8f !important;
            background-color: #159d8f !important;
            border-radius: 50px !important;
            text-align: center;
            transition: 0.3s ease;
        }
        
        .inputS:hover {
            color: #159d8f !important;
            border: 2px solid #159d8f !important;
            background-color: #fff !important;
        }
        
        .Wwrapper {
            width: 40%;
            height: 100%;
            border: 2px black;
            margin: 150px auto;
            padding: 20px;
            box-shadow: 0 0 30px grey;
            border-radius: 4px;
        }
        
        .image1 {
            width: 100%;
        }
    </style>
   
</head>
<body>
<header>
    <div id="main_menu">
        <div class="logo_area">
            <a href=""><img class="image" src="/Snugkins/Images/Snugkins_full_logo.png" alt=""></a>
        </div>
        <div class="inner_main_menu">
            <ul id="menu">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Detail</a>
                    <ul>
                        <li><a href="">Dropdown Menu</a></li>
                        <li><a href="">Dropdown Menu</a>
                            <ul>
                                <li><a href="">Dropdown Sub Menu</a></li>
                                <li><a href="">Dropdown Sub Menu</a></li>
                                <li><a href="">Dropdown Sub Menu</a></li>
                                <li><a href="">Dropdown Sub Menu</a></li>
                                <li><a href="">Dropdown Sub Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="">Dropdown Menu</a></li>
                        <li><a href="">Dropdown Menu</a></li>
                    </ul>
                </li>
                <li><a href="">Contact</a></li>
                <li><a href="">Map</a>
                    
                </li>
                <li><a href="">Newsletter</a></li>
            </ul>
        </div>
    </div>
</header>
<nav role="navigation">
        <div class="logo_area">
            <a href=""><img class="image" src="/Snugkins/Images/Snugkins_full_logo.png" alt=""></a>
        </div>
        <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
        
        <ul id="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Info</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
        </div>
        </nav>
        </div>
        </div>
        </div>
  <?php
function getAge($doc){
  $Cday = new DateTime($doc);
  $today = new Datetime(date('m.d.y'));

	date_add($Cday, date_interval_create_from_date_string("266 days"));
	echo "Your Due Date is  ";
	echo date_format($Cday, "d-m-y");
}
?>
<div class = "Wwrapper">
  <div class ="image">
 <img class="image1" src = "/Snugkins/Images/Preagnet.jpeg"></div>
<h1 class="center">Calculate Your Pregnancy Due Date</h1>

<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
      <h2 > Enter Your Conception Date </h2><br>
      <input type="date" class="inputV" name="doc" value="<?php echo (isset($_GET['doc']))?$_GET['doc']:'';?>"><br>

      <input type="submit" class="inputS" value="Calculate Due Date">
    </div>
  </form>
  <?php
    if(isset($_GET['doc']) && $_GET['doc']!=''){?>
      <div class="result-wrapper">
        
        <?php echo getAge($_GET['doc']);?>
      </div>
    <?php }
  ?>
</div>
</div>
<script src="/Snugkins/Js/index.js"></script>
</body>
</html>