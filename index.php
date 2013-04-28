<html>
<head>
<!--Here goes the title of the page -->
<title>Wiki-for a day | Rhythm Gupta</title>
<!--Adding google font: Special Elite to the list. Adding 'wiki' feel to the website-->
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
<style type="text/css">
h3{
font-family: 'Special Elite', cursive;
font-weight: 400; 
}

</style>
</head>
<body><center><br><br>
<h3> Wiki- for a day</h3>
<form action="wiki.php" method="POST" onsubmit="return yoyo()">
Wikipedia Link:<input type="text" id="link" name="link" placeholder="Plese provide a valid link">
<br><br>
<input type="submit" value="Get Wiki!">
<div id="wrong"></div>
</form>
</center>


<script type="text/javascript">
function contains(str, text) {
   return str.indexOf(text) !== -1 ;
}
function yoyo(){ //this function checks whether the link provided by the user is correct wikipedia link or not.
if (contains(document.getElementById("link").value,'wikipedia')){
   return true;
}
else {document.getElementById("wrong").innerHTML= '<i>Invalid Wikipedia Link<\/i>';return false;}
}
</script>
<br><br>
<div>
<center><h3>About</h3><h3>
Since, the wikipedia isn't accessible from IIT-D campus today. 'Wiki-for a day' is a little hack by <a href="https://twitter.com/rhy7hm">Rhythm Gupta</a> to help you surf Wikipedia from campus.

</h3>
<h3> This hack was build 15 minutes after I got in an argument about standard room temperature with my roomie.</h3>
<h3>And checkout by entering "en.wikipedia.org/wiki/Room_temperature" that it's not 27 Degrees Celcius.</h3><h3> I lost the argument. :(</h3>
<h3>--More features added by Sachin Goel</h3>
</center>
</div><br><br><br>
<?php 
 $File = "counter1.txt";  
 $handle = fopen($File, 'r+') ; 
 $data = fread($handle, 512) ; 
 $count = $data + 1; 
 fseek($handle, 0) ; 
 fwrite($handle, $count) ; 
 fclose($handle) ; 
 $File = "counter.txt";  
 $handle = fopen($File, 'r+') ; 
 $data = fread($handle, 512) ; 
 echo "<h3 style='bottom: 5%; position: absolute;left:40%'>Wikipedia pages served: ".$data."</h3>"; 
 fseek($handle, 0) ; 
 fclose($handle) ;
 
//code for extracting IPs and saving them to a file named ips.txt
$File2 = "ips.txt";  
 $handle2 = fopen($File2, 'r+') ; 
 $data2 = fread($handle2, 512) ; 
 $count2 = $data2."\n Index".$_SERVER['REMOTE_ADDR']; 
 fseek($handle2, 0) ; 
 fwrite($handle2, $count2) ; 
 fclose($handle2) ; 
 
 ?> 
</body>
</html>
