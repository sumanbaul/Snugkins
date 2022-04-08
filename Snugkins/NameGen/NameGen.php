<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babay Name Generator</title>
    <link rel="stylesheet" href="/Snugkins/Css/style.css">
    <link rel="stylesheet" href="/Snugkins/Css/styles.css">
    <link rel="stylesheet" href="/Snugkins/Css/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
        <div id="main_menu">
            <div class="logo_area">
                <a href=""><img id="image" src="/Snugkins/Images/Snugkins_full_logo.png" alt=""></a>
            </div>
            <div class="inner_main_menu">
                <ul id="menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Detail</a>
                        
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
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card-mt-5">
                    <div class="card-header">
                        <h4>Name Generator</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="">Gender</label>
                                    <input type="text" name="gender" value="<?php if(isset($_GET['gender'])){echo $_GET['gender'];}?>" class="form-control">
                                </div>
                                <div class="col-md-8">
                                    <label for="">First Letter</label>
                                    <input type="text" name="FirstL" value="<?php if(isset($_GET['FirstL'])){echo $_GET['FirstL'];}?>" class="form-control">
                                </div>
                                <div class="col-md-8">
                                    <label for="">Length</label>
                                    <input type="number" name="Length" value="<?php if(isset($_GET['Length'])){echo $_GET['Length'];}?>" class="form-control">
                                </div>
                            
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>


                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php
                                
                                 $con = mysqli_connect("localhost","root","root","BABY NAMES");

                            if(isset($_GET['gender']))
                            {
                                $gender = $_GET['gender'];
                                $FirstL = $_GET['FirstL'];
                                $Leng = $_GET['Length'];
                                $query = "SELECT * FROM baby_n WHERE gender='$gender' AND LEFT(name, 1) = '$FirstL' AND LENGTH(name)<='$Leng' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {  ?>
                                            <div class="form-group mb-3">
                                            <table>
                                            <tr>
                                            <th>Name</th>
                                            <th>Meaning</th>
                                            
                                            </tr>
                                            <tr>

                                            <td><input type="text" value="<?= $row['name']; ?>" class="form-control"></td>
                                            <td><input type="text" value="<?= $row['meaning']; ?>" class="form-control"></td>
                                            </tr>
                                            </div>
                                            
                                            </table>
                                            
                                            <?php
                                        }
                                    }
                                else
                                    {
                                        echo "No Record";
                                    }
                            }
                            ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style>
        *{
            box-sizing:unset;
        }
.container{
    margin-top:100px
}
  .card-body{
    border: 1px solid #f3648c;
    width:90%;
    margin-bottom: 15px;
    margin-top: 20px;
    padding: 30px;
  
    color:  #f3648c  ; 
  }      
.card-mt-5{
  width: 85%;
   

    
    border: 1px black;
    margin: 50px auto;
    padding: 10px;
    box-shadow: 0 0 30px grey;
    border-radius: 4px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td{
  border: 4px solid #fcfcfc;
  text-align: left;
  padding: 8px;
  border-radius: 4px solid #fcfcfc;
}

tr:nth-child(even) {
  background-color: #159d8f;
}
h4{
    text-align: center;
}
button{
    margin-top: 20px;
    width: 50px;
    height: 30px;
    
}
</style>
<script src="/Snugkins/Js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>