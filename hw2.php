
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd"> 
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Form
</title>
<script type="text/javascript">

function test()
{
var status = true


s = document.getElementById("fn1").value 
p = /^[A-Z][a-z]+$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("first_name").innerHTML = "Incorrect Name"
}
else
{
document.getElementById("first_name").innerHTML = ""
}




s = document.getElementById("ln1").value 
p = /^[A-Z][a-z]+$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("last_name").innerHTML = "Incorrect Name"
}
else
{
document.getElementById("last_name").innerHTML = ""
}



s = document.getElementById("mi1").value 
p = /^([A-Z]|())$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("middle_initial").innerHTML = "Incorrect Middle Initial"
}
else
{
document.getElementById("middle_initial").innerHTML = ""
}



s = document.getElementById("t1").value 
p = /^(Jr|Sr|MD|Esq|DC|PhD|())$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("title").innerHTML = "Incorrect Title"
}
else
{
document.getElementById("title").innerHTML = ""
}



mm = document.getElementById("month1").value 
dd = document.getElementById("day1").value 
s =  mm + dd
p = /^(0230|0231|0431|0631|0931|1131)$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("combo").innerHTML = ""
}
else
{
document.getElementById("combo").innerHTML = "Incorrect Day and Month."
}



s = document.getElementById("year1").value 
p = /^[1-2][0-9][0-9][0-9]$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("year").innerHTML = "Incorrect Year."
}
else
{
document.getElementById("year").innerHTML = ""
}



s = document.getElementById("g1").value 
p = /^[Male][male][Female][female]$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("gender").innerHTML = "Incorrect Gender"
}
else
{
document.getElementById("gender").innerHTML = ""
}



s = document.getElementById("p1").value 
p = /^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/
if (  s.search(p) == -1    ) 
{  status = false;
document.getElementById("phone").innerHTML = "Incorrect Phone Number Format. Use no dashes."
}
else
{
document.getElementById("phone").innerHTML = ""
}

return status
}

</script>
<style type="text/css">
.style1 {
	text-align: center;
}
  </style>
</head>

<body>

<form onsubmit = "return test()" >

<table border = 5 style="black">
<tr>
	<td style="width: 326px" >First Name 
	<input type="text" id="fn1" name="first_name" value="" style="width: 245px; height: 20px;">
	<span id="first_name"></span>
	</td>
	<td style="">Middle Initial (Optional)
	<input type="text" id="mi1" name="middle_initial" value="" style="width: 86px">
	<span id="middle_initial"></span>
	</td>
</tr>


<tr>
	<td >Last Name 
	<input type="text" id="ln1" name="last_name" value="" style="width: 242px">
	<span id="last_name"></span>
	</td>
	<td >Title (Optional)&nbsp;&nbsp; 
	<input type="text" id="t1" name="title" value="" style="width: 140px">
	<span id="title"></span>
	</td>

</tr>
	
<tr>
	<td style="width: 326px">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
	<input type="text" id="g1" name="gender" value="" style="width: 247px">
	<span id="gender"></span>
	</td>
	<td style="width: 100" >Phone
	<input type="text" id="p1" name="phone" value="" style="width: 196px">
	<span id="phone"></span>
	</td>	
</tr>

<tr>

<td style="width: 326px">Date of Birth<br>
	<select name="month" id="month1">
	<option value="01"> January </option>
	<option value="02"> February </option>
	<option value="mar"> March </option>
	<option value="apr"> April </option>
	<option value="may"> May </option>
	<option value="jun"> June </option>
	<option value="jul"> July </option>
	<option value="aug"> August </option>
	<option value="sep"> September </option>
	<option value="oct"> October </option>
	<option value="nov"> November </option>
	<option value="dec"> December </option>
</select>


	<select name="Day" id="day1">
	<option value="01"> 1 </option>
	<option value="02"> 2 </option>
	<option value="03"> 3 </option>
	<option value="04"> 4 </option>
	<option value="05"> 5 </option>
	<option value="06"> 6 </option>
	<option value="07"> 7 </option>
	<option value="08"> 8 </option>
	<option value="09"> 9 </option>
	<option value="10"> 10 </option>
	<option value="11"> 11 </option>
	<option value="12"> 12 </option>
	<option value="13"> 13 </option>
	<option value="14"> 14 </option>
	<option value="15"> 15 </option>
	<option value="16"> 16 </option>
	<option value="17"> 17</option>
	<option value="18"> 18 </option>
	<option value="19"> 19 </option>
	<option value="20"> 20 </option>
	<option value="21"> 21 </option>
	<option value="22"> 22 </option>
	<option value="23"> 23 </option>
	<option value="24"> 24 </option>
	<option value="25"> 25 </option>
	<option value="26"> 26 </option>
	<option value="27"> 27 </option>
	<option value="28"> 28 </option>
	<option value="29"> 29 </option>
	<option value="30"> 30 </option>
	<option value="31"> 31 </option>
</select>
<span id="combo"></span>
Year&nbsp;&nbsp;<input type = text  id="year1" name = "Year" style="width: 145px">
<span id="year"></span>
</td>
<td>Upload <form action = "upload.php" method="Post" enctype="multipart/form-data" onsubmit = "return test()" >
<input type ="file" name="upfile" />


<?php


 ($_FILES["upfile"]["size"] < 500000  );
 ($_FILES["upfile"]["type"] ==  "image/jpg"   ) 	;
    move_uploaded_file
        ($_FILES ["upfile"]["tmp_name"] ,  "storage/"  .  $_FILES ["upfile"]["name"] ) ;

?>
<tr>
<td colspan="2" align="center">
<input type ="submit" name ="submit" value="Submit"/>
<td>
</tr>

</form>
<p>
<a href="http://validator.w3.org/check?uri=referer"><img
    src="http://www.w3.org/Icons/valid-html401"
    alt="Valid HTML 4.01 Strict" height="31" width="88"></a> 
</p> 

