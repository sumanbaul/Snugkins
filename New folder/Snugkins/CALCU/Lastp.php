<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
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
</head>
<body>
  

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
