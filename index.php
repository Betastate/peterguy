<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("MainHub.jpg");
}
theName {
    color: green;
    margin-left: 40px;
} 
img.frontImage {
    margin-left:440px;
    margin-bottom:5px;
    padding:1px;
    border:3px solid rgb(0,0,125);
    background-color: rgb(125,0,125);
}
form.firstForm {
    margin-left:450px;
    margin-right:10px;
    margin-top:0px;
    margin-bottom:0px;
}
p{
   margin-left:50px;
   margin-top:0px;
   margin-bottom:0px;
   color: rgb(0,0,125);
   font-size:26px;
   font-style: italic;
}
p1 {
   margin-left:15px;
   margin-top:0px;
   margin-bottom:0px;
   color: rgb(0,0,125);
   font-size:25px;
   font-style: italic;
}
p2 {
   margin-top:20px;
   margin-left:298px;
   margin-top:0px;
   margin-bottom:0px;
}


</style>
</head>
<body>
<img class="frontImage" src="TestTexture.jpg" width="440" height="180" align="center"><br>
<form class="firstForm" action ="dbadmin.php" method="post">
    <p>Enter your name:<input name="theName" align="center" type="text"></p><br>
    <p1>Enter your password:<input class="inputPass" name="thePass" align="center" type="text"></p1><br><br> 
<p2><input type="submit" align="center" value="Enter"></p2>
</form>

</body>
</html>