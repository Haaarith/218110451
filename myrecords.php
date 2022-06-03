<?php
include('head1.php');
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];
$username = $_POST['sname'];
$password = $_POST['pass'];
$about = $_POST['abt'];
$cit = $_POST['city'];
$count = $_POST['country'];
$hight = $_POST['height'];
$textfile = $_POST['file'];


function fullname(){
    $fname=$_POST['fname'];
    echo $fname;
}


function readFromFile(){
    $rF = fopen($_POST['file'],'r') or die("File not Found"); 
    $fileSize = str_word_count(file_get_contents($_POST['file']));
    echo $fileSize;
    fclose($rF);
}

function longestword(){
  $rF = fopen($_POST['file'],'r') or die("File not Found"); 
        $fileSize = strlen($GLOBALS['textfile']);
        $cont= fread($rF,$fileSize);
        
  $array = explode(" ",$cont);
  $result = "";
  foreach($array as $candidate)
  {
  if(strlen($candidate) > strlen($result))
  $result = $candidate;
  }
  return $result;
  fclose($rF);
}
function writeIntoFile(){
    $wf = fopen("update.txt","a") or die("File Cannot Be Created");
    fwrite($wf, "The time now is  " . date("h:i:sa")."\n");
    fwrite($wf,"  Information of Submited Form \n");
    fwrite($wf," The Name Entered was $_POST[fname].$_POST[mname].$_POST[lname] \n");
    fwrite($wf," The passwrod leng is".$_POST['pass'] . "\n");
    fwrite($wf," The User name : ".$sname = $_POST['sname']. "\n");
    fwrite($wf," The ABout is   : ".$about = $_POST['abt']. "\n");
    fwrite($wf," The city : ".$_POST['city']. "\n");
    fwrite($wf," The country : ".$_POST['country']. "\n");
    fwrite($wf," The heigt : ".$_POST['height']. "\n");
    fwrite($wf," \n");
    fclose($wf);
}

function height(){
    $y=$_POST['height'];
    $sumofmul=0;
    for($x=1; $x<=10; $x++){
        echo $x."*".".".$y."=".($x * $y)."<br>";
        $sum= $x*$y;
        $sumofmul=$sumofmul+$sum;

    }
    echo 'Sum of '.$y. ' times table is : '.$sumofmul;


}

function maxWord()
{
    
    $myfile = fopen("MATAM.txt", "r") or die("Unable to open file!");
    $str = fread($myfile,filesize("MATAM.txt"));
    fclose($myfile);
    $words=explode(" ",$str);
    $maxlen =0;
    foreach($words as $a)
    {
    
        if(strlen($a)>$maxlen)
        $maxlen=strlen($a);
    }


    echo $maxlen;

    
}

function rtct(){
    switch ($_POST['city']){
      case 'Riyadh':echo "ksa";break;
      case 'jeddah':echo "use";break;
      case 'dammam':echo "uk";break;
      case 'Ahsa':echo"nagah" ;break;
    }
    }  



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
            <h3>Welcome dear <?php fullname();?></h3>
        </div>
    </div>
</div>

<br>

<div class="container  text-right">
       <div class="row">
			<div class="col bg-secondary text-whit " >
				<?php echo
                    "Full Name is :".fullname()."<br>"."username is :".
                    $username."<br>"."password is : ".
                    $password."<br>"."About the course : ".
                    $about."<br>"."City is : ".
                    $cit."<br>"."country is : ".
                    $count."<br>"."height is : ".
                    $hight;?>
            </div>
       </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-sm-3 bg-black text-white">
            <h5>password hash is : <?php echo md5($password);?></h5>
        </div>
        <div class="col-sm-1">
            
        </div>
        <div class="col-sm-3 bg-black text-white">
            <h3>Count of words in file <?php readFromFile();?></h3>
            <h3>No of characters Entered for Survey <?php echo strlen($about);?> </h3>
        </div>
        <div class="col-sm-1">
            
        </div>
        <div class="col-sm-3 bg-black text-white">
            <h3>city <?php echo rtct(). "riaydh" ; ?></h3>
        </div>
    </div>


    <br>

</div>
<div class="container">
    <div class="row">
    <div class="col-sm-3 bg-info rounded">
		<h3> Writing into file Update.txt all info eneterd in form   </h3>
        <?php writeIntoFile();?>
	</div>
    <div class="col-sm-1"></div>

    <div class="col-sm-3 bg-info rounded ">
		<h3> Age of Qalba is :  </h3>
        <h3>Count of </h3>
        <?php readFromFile();?>
	</div>
    <div class="col-sm-1"></div>

    <div class="col-sm-3 bg-info rounded">
		<h3> Table <?php height()?> </h3>
        
	</div>
</div>
<br>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-5 bg-danger">
            <h1> count of biggest word <?php echo maxWord();?></h1>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6 bg-danger">
            <?php  welcome();?>
        </div>
        
    </div>
</div>

    
</body>
</html>
<?php include("foot1.php"); 


function welcome(){
 echo "welcom to KSA";   
}?>