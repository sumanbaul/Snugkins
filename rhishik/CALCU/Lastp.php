<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/slicknav.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Barlow:wght@600&family=Great+Vibes&family=Lobster&family=Montserrat:wght@100&family=Ole&display=swap');
  
    .form-wrapper{
      margin:0;
      width:95%;
      
      
      margin-top:30px;
      background: #fff;
      box-shadow: 0 3px 10px rgba(140,152,164,0.3);
    }
    .input-wrapper{
      border: 1px solid #f3648c;
      width:100%;
      margin-bottom: 15px;
      padding: 15px;
      text-align:center;
      color: #f3648c  ;
      
  }
    
   
    .result-wrapper{
      font-size: 20px;
        font-weight: bold;
        padding: 10px;
        background: #609460;
        color: blue;
       
    }
    body{
      background: #eee;
      font-family: 'Barlow', sans-serif;
      text-align:center;
      
    }
    h1.center{
      text-align: center;
    }
    .inputV{
      border: 1px solid #68a9ca;
      color: #5181ad;
      font-size: 20px;
      margin: 0 5px;
  
      text-align: center;
      margin-bottom: 20px;
      
    }
    .inputS{
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
      border: 2px solid #6598ff !important;
      background-color: #6598ff !important;
      border-radius: 50px !important;
      text-align: center;
      transition:0.3s ease;
    }
    .inputS:hover {
      color: #6598ff !important;
      border: 2px solid #6598ff !important;
      background-color: #fff !important;
  }
  .Wwrapper{
    width: 40%;
     
  
      height: 100%;
      border: 2px black;
      margin: 50px auto;
      padding: 20px;
      box-shadow: 0 0 30px grey;
      border-radius: 4px;
  }
  img{
    width:100%;
  }
  .image{
    width:100%;
    text-align:center;
  }
  
    </style>
      <style>
      @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Barlow:wght@500&family=Great+Vibes&family=Lobster&family=Montserrat:wght@100&family=Ole&display=swap');
body {
  background: url(bg.jpg);
  font-family: 'Barlow', sans-serif;
  font-size: 20px;
  font-weight: 400;
  line-height: 1.5em;
}

.inner_main_menu {
  margin: -10px auto;
  width: 105%;
}

.inner_main_menu ul {
  margin: 0;
  padding: 8% 0 0;
  list-style: none;
  text-align: right;
}

.inner_main_menu ul li {
  float: none;
  display: inline-block;
  position: relative
}

.inner_main_menu ul li:nth-child(1) {
  float: left;
}

.inner_main_menu ul li:nth-child(2) {
  float: left;
}

.inner_main_menu ul li:nth-child(3) {
  float: left;
}

.inner_main_menu ul li a {
  color: #262626;
  font-size: 16px;
  text-transform: uppercase;
  text-decoration: none;
  display: block;
  padding: 10px 20px;
}

.inner_main_menu ul li a:hover {
  color: #6FDA44
}

.inner_main_menu ul li ul {
  position: absolute;
  top: 40px;
  left: -9999999px;
  width: 200px;
  background: #262626;
  padding: 0;
}

.inner_main_menu ul li:hover ul {
  left: 0px;
}

.inner_main_menu ul li ul li {
  float: left;
  width: 100%;
  text-align: left;
}

.inner_main_menu ul li ul li a {
  color: #fff;
  text-transform: capitalize;
  font-size: 15px;
}

.inner_main_menu ul li ul li a:hover {
  background: #ddd;
  color: #262626;
}

.inner_main_menu ul li ul li ul {
  top: 0;
  left: -999999px;
}

.inner_main_menu ul li:hover ul li ul {
  top: 0;
  left: -999999px;
}

.inner_main_menu ul li ul li:hover ul {
  top: 0;
  left: 200px;
}

.inner_main_menu ul li:hover a {
  color: #6FDA44
}

.inner_main_menu ul li:hover ul li a {
  color: #ffffff
}

.inner_main_menu ul li ul li a:hover {
  color: #262626
}

.inner_main_menu ul li ul li:hover a {
  background: #ddd;
  color: #262626;
}

.inner_main_menu ul li ul li:hover ul li a {
  background: #262626;
  color: #fff;
}

.inner_main_menu ul li ul li ul li a:hover {
  background: #ddd;
  color: #262626;
}

.slicknav_menu {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  font-size: 16px;
  padding: 0px;
  display: none;
  position: fixed;
  right: 0;
  width: 100%;
  z-index: 99999;
}

ul.slicknav_nav {
  background: #262626 none repeat scroll 0 0;
  left: 0;
  position: absolute;
  top: 0;
  width: 80%;
}

.slicknav_btn {
  top: 35px;
}

#main_menu {
  width: 61%;
  position: relative;
  margin: auto;
}

.logo_area {
  width: 25%;
  height: 200px;
  position: absolute;
  left: 53%;
  top: 0;
  content: "";
  margin-left: -140px;
  text-align: center;
}

.logo_area img {
  height: 86.75px;
  width: 200px;
  padding-top: 40px;
}
</style>  
</head>
<body>
<header>
    <div id="main_menu">
        <div class="logo_area">
            <a href=""><img class="image" src="Snugkins_full_logo.png" alt=""></a>
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
                <li><a href="">Newsletter</a></li>
            </ul>
        </div>
    </div>
</header>


<?php
function getAge($doc){
  $Cday = new DateTime($doc);
  $today = new Datetime(date('m.d.y'));

	date_add($Cday, date_interval_create_from_date_string("280 days"));
	echo "Yor Due Date is  ";
	echo date_format($Cday, "d-m-y");
}
?>
<div class = "Wwrapper">
  <div class ="image">
 <img src = "ovulation-and-pregnancy-1280.jpg"></div>
<h1 class="center">Calculate Your Pregnancy Due Date</h1>

<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
      <h2 >When was your last period</h2><br>
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
</body>
</html>
