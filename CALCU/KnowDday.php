<style>
.form-wrapper{
  margin:0 auto;
  width:50%;
  padding:20px;
  margin-top:30px;
  background: #fff;
  box-shadow: 0 3px 10px rgba(140,152,164,0.3);
}
.input-wrapper{
  margin-bottom: 20px;
}
.input-wrapper label{
  padding-right:20px;
}
.result-wrapper{
  font-size: 20px;
    font-weight: bold;
    padding: 10px;
    background: #609460;
    color: #fff;
}
body{
  background: #eee;
}
h1.center{
  text-align: center;
}
</style>


<?php
function getAge($doc){
  $Cday = new DateTime($doc);
  $today = new Datetime(date('m.d.y'));

	$a=date_sub($Cday, date_interval_create_from_date_string("280 days"));
    $d=$a->diff($today);
    echo "You'ar Currently ";
	echo $d->format("%a");
    echo " days Long Into Pregnancy!!";

}
?>

<h1 class="center">Calculate Your Due Date</h1>
<hr>
<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
      <label>When is your due date?</label>
      <input type="date" name="doc" value="<?php echo (isset($_GET['doc']))?$_GET['doc']:'';?>">
      <input type="submit" value="Calculate stage">
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