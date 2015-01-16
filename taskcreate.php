<!DOCTYPE html>
<html>
<head>
<style>
body {
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
   margin-right:500px;
   margin-top:0px;
   margin-bottom:0px;
   color: rgb(175,0,125);
   font-size:20px;
   font-style: italic;
}
p1 {
   margin-left:10px;
   margin-top:0px;
   margin-bottom:0px;
   color: rgb(0,0,125);
   font-size:20px;
   font-style: italic;
}
p4 {
   margin-left:380px;
   margin-top:0px;
   margin-bottom:0px;
   color: rgb(50,5,125);
   font-size:17px;
   font-style: italic;
}
p3 {
   margin-left:37px;
   margin-top:0px;
   margin-bottom:0px;
   color: rgb(0,0,125);
   font-size:20px;
   font-style: italic;
}

</style>
</head>
<body>
<form class="firstForm" action ="index.php" method="post">
    <p>Task Description:<textarea placeholder="Aim for 8 words or less please" rows="2" cols="50" name="theDescription" align="center" type="text"></textarea></p><br>
   Category:<p1><select name="theCategory"> 
<option> career </option>
<option> education </option>
<option> enterprise </option>
<option> family </option>
<option> finance </option>
<option> grooming </option>
<option> health </option>
<option> homecare </option>
<option> intellect </option>
<option> play </option>
<option> relationship </option>
<option> social </option>
<option> spirituality </option>
 </select> </p1><br><br>
With:<p3><select name="theWith"> 
<option> Peter </option>
<option> Christian </option>
<option> Rumen </option>
<option> Aleksandar </option>
</select></p3><br><br>
Notes:<br><p6><textarea name="jobNotes" rows="5" cols="60" placeholder="Feel free to waffle here"></textarea></p6><br><br>
Is it Important <select><option>1</option><option>2</option><option>3</option></select>
Is it Urgent <select><option>1</option><option>2</option><option>3</option></select> <br><br>
Frequency <select><option>1 Time</option><option>Daily</option><option>Weekly</option><option>Monthly</option><option>Quarterly</option><option>Annual</option></select>
<br><br>
<p4><input type="submit" align="center" value="Create Task"></p4>
</form>

</body>
</html>