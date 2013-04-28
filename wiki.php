<?php
if(isset($_POST['link'])){
echo "<form method='post' action='#' id='formMain'><input type='hidden' name='link' id='linkId'></form>";
echo '<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>';
echo '<script type="text/javascript">
   $(function(){
       $("a").click(function(e){
             e.preventDefault(); var value=$(this).attr("href");
             if(value.substring(0,5)=="/wiki"){
                 $("#linkId").attr("value","en.wikipedia.org"+value);
                 $("#formMain").submit();
             }
       })
   })</script>';
//this function gets the data from wikipedia
function get_data($url) {
  $ch = curl_init();
	$timeout = 300;
        curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
     //   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$a=$_POST['link'];
if(substr($a,0,5)=="https"){
  $a=substr($a,8,strlen($a)-8);
}
$b=get_data($a);
echo $b;
 $File = "counter.txt";  
 $handle = fopen($File, 'r+') ; 
 $data = fread($handle, 512) ; 
 $count = $data + 1; 
 fseek($handle, 0) ;
 fwrite($handle, $count) ; 
 fclose($handle) ; 


//code for extracting IPs
$File2 = "ips.txt";  
 $handle2 = fopen($File2, 'r+') ; 
 $data2 = fread($handle2, 512) ; 
 $count2 = $data2."\n".$_SERVER['REMOTE_ADDR']; 
 fseek($handle2, 0) ; 
 fwrite($handle2, $count2) ; 
 fclose($handle2) ; 
 
}
else{
 echo '<script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>';
 echo '<script type="text/javascript">$(document).ready(function(){
     var time=5;
     setInterval(function(){
        if(time>=0){
          $("#timeVal").text(time);
          time--;
} else{
     $("#timeVal").text("0"); $("#getBr").text("Get a browser dude!");
}
},1000);
})</script>';
 echo "<head><meta http-equiv='refresh' content='5;URL=\"http://iitd.info/wiki\"'></head>";
 echo "You won't get anything here brah!Redirecting to home page in <span id='timeVal'>5</span> seconds...<br><br><span id='getBr'></span>";
}
?>
