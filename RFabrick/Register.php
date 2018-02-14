<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>

<script type="text/javascript">
function validateSearch()
{
	if(validateSearchField())
	{
		window.location.href = "Search.html";
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateSearchField()
{
	var search = document.getElementById("SearchFiledID").value;
	if((search==null)||(search=="")||(search==" ")){
		alert("Enter text to search")
		return false;
	}
	else
		return true;
}
function validate()
{
	if(validateName() && validateAddress() && validateeMail() && validatePassword() && validateConfirmPassword() && confirmPassword())
	{
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET","PHPpages/InsertBuyerData.php?userName="+document.getElementById("NameFieldID").value+"&eMail="+document.getElementById("eMailfieldID").value+"&password="+document.getElementById("PasswordFieldID").value,false);
		xamlhttp.send(null);
		
		window.event.returnValue=true;
			
	}
	else
		window.event.returnValue=false;
}
function validateName()
{
	var name = document.getElementById("NameFieldID").value;
	if((name==null)||(name=="")||(name==" ")){
		alert("Enter your name")
		return false;
	}
	else
		return true;
}
function validateAddress()
{
	var address = document.getElementById("AddresfieldID").value;
	if((address==null)||(address=="")||(address==" ")){
		alert("Enter your address")
		return false;
	}
	else
		return true;
}
function validateeMail()
{
	var email = document.getElementById("eMailfieldID").value;
	var ap=email.indexOf("@");
	var dp=email.indexOf(".");
	if((ap>1)&&(dp-ap>1)&&(email.length-1>dp))
	{
		return true;	
	}
	else
	{
		alert("Enter an email");
		return false;
	}
}
function validatePassword()
{
	var password = document.getElementById("PasswordFieldID").value;
	if((password==null)||(password=="")||(password==" ")){
		alert("Enter your password")
		return false;
	}
	else
		return true;	
}
function validateConfirmPassword()
{
	var password = document.getElementById("ConfirmPasswordFieldID").value;
	if((password==null)||(password=="")||(password==" ")){
		alert("Enter your confirm password")
		return false;
	}
	else
		return true;	
}
function confirmPassword()
{
	var cpassword = document.getElementById("ConfirmPasswordFieldID").value;
	var password = document.getElementById("PasswordFieldID").value;
	if(cpassword != password){
		alert("Password dosen't match")
		return false;
	}
	else
		return true;
}
function validate2()
{
	if(validateBrandName2() && validateDescription2() && validateFirstName2() && validateLastName2() && validateAddress2()  && validateeMail2() && validatePassword2() && validateConfirmPassword2() && confirmPassword2() && valiTelephone())
	{
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET",
		"PHPpages/InsertSupplierData.php?BrandName="+document.getElementById("BrandNameFieldID").value+
		"&Description="+document.getElementById("DescriptionFieldID").value+
		"&FirstName="+document.getElementById("FirstNameFieldID").value+
		"&LastName="+document.getElementById("LastNameFieldID").value+
		"&Address="+document.getElementById("AddresfieldID2").value+
		"&Telephone="+document.getElementById("TelephoneFieldID").value+
		"&email="+document.getElementById("eMailfieldID2").value+
		"&Password="+document.getElementById("PasswordFieldID2").value
		,false);
		xamlhttp.send(null);
		
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateBrandName2()
{
	var bname = document.getElementById("BrandNameFieldID").value;
	if((bname==null)||(bname=="")||(bname==" ")){
		alert("Enter brand name")
		return false;
	}
	else
		return true;
}
function validateDescription2()
{
	var description = document.getElementById("DescriptionFieldID").value;
	if((description==null)||(description=="")||(description==" ")){
		alert("Enter description")
		return false;
	}
	else
		return true;
}
function validateFirstName2()
{
	var Fname = document.getElementById("FirstNameFieldID").value;
	if((Fname==null)||(Fname=="")||(Fname==" ")){
		alert("Enter your first name")
		return false;
	}
	else
		return true;
}
function validateLastName2()
{
	var Lname = document.getElementById("LastNameFieldID").value;
	if((Lname==null)||(Lname=="")||(Lname==" ")){
		alert("Enter your last name")
		return false;
	}
	else
		return true;
}
function validateAddress2()
{
	var address = document.getElementById("AddresfieldID2").value;
	if((address==null)||(address=="")||(address==" ")){
		alert("Enter your address")
		return false;
	}
	else
		return true;
}
/*function validateTelephone2()
{
	var telephony = document.getElementById("TelephoneFieldID").value;
	var tp=telephony.length;
	if(tp ==10 ){
		if(isNaN(telephony))
		{
			return true;
		}
		return true;
	}
	else
	{
		alert("Enter correct telephone number")
		return false;
	}
}*/
function validateeMail2()
{
	var email = document.getElementById("eMailfieldID2").value;
	var ap=email.indexOf("@");
	var dp=email.indexOf(".");
	if((ap>1)&&(dp-ap>1)&&(email.length-1>dp))
	{
		return true;	
	}
	else
	{
		alert("Enter an email");
		return false;
	}
}
function validatePassword2()
{
	var password = document.getElementById("PasswordFieldID2").value;
	if((password==null)||(password=="")||(password==" ")){
		alert("Enter your password")
		return false;
	}
	else
		return true;	
}
function validateConfirmPassword2()
{
	var password = document.getElementById("ConfirmPasswordFieldID2").value;
	if((password==null)||(password=="")||(password==" ")){
		alert("Enter your confirm password")
		return false;
	}
	else
		return true;	
}
function confirmPassword2()
{
	var cpassword = document.getElementById("ConfirmPasswordFieldID2").value;
	var password = document.getElementById("PasswordFieldID2").value;
	if(cpassword != password){
		alert("Password dosen't match")
		return false;
	}
	else
		return true;
}
function valiTelephone()
{
	var selectedItem = document.getElementById("countryList").selectedIndex;
	var telephonewithcountry = document.getElementById("TelephoneFieldID").value;
	var tp=telephonewithcountry.length;
	
	if (selectedItem == 0 && tp == 10)
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 1 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 2 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 3 && tp == 10)
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 4 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 5 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 6 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 7 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 8 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if (selectedItem == 9 && (tp >= 10 && tp<=15))
	{
		if(isNaN(telephonewithcountry))
		{
			return true;
		}
		return true;
	}
	else if(selectedItem == 10)
	{
		alert("Select country")
		return false;
	}
	else
	{
		alert("Enter correct telephone number")
		return false;
	}
}
</script>

</head>

<body>
<table class="TopBarClass" width="100%" bgcolor="#FFFFFF" border="0" align="center">
  <tr>
    <td height="25" width="0%"></td>
    <td height="25" width="720"></td>
    <td height="25" width="70"><font face="Segoe UI" size="2"><center><i>My eStore</i></center></font></td>
    <td height="25" width="160"><font face="Segoe UI" size="2"><center><i>Hi! <a href="Login.php">Sign in</a> or <a href="Register.php">Register</a></i>
    </center></font></td>
    <td height="25" width="20"><center>
      <a href="Cart.html"><img src="Images/Cart.png" width="20" height="20" /></a>
    </center></td>
    <td height="25" width="%"></td>
  </tr>
</table>
<table id="Search" width="1000" border="0" align="center">
  <tr>
    <td width="191" rowspan="3"><a href="Home.php"><img src="Images/Logo.png" width="180" height="70" /></a></td>
    <td width="573">&nbsp;</td>
    <td width="126">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126" bgcolor="#5882FA"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
      <font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.html">Advanced</a></i></font><i><a href="Compare.html"></a></i></font>
    </center></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table class="MenuBar"  height="40" width="1000" border="0" align="center">
  <tr>
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.php">Home</a> | <a href="About_Us.php">About Us</a> | <a href="Contact_Us.php">Contact Us</a> | <a href="Help.php">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Register</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td></td>
  </tr>
</table>
<table width="100%" bgcolor="#FAFAFA" border="0" align="center">
  <tr>
    <td width="%" height="575" rowspan="5"></td>
    <td height="85" colspan="4"></td>
    <td width="495" rowspan="5" bgcolor="#FFFFFF"><div id="TabbedPanels1"  class="TabbedPanels">
      <ul class="TabbedPanelsTabGroup">
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Register as a Buyer</font></li>
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Register as a Supplier</font></li>
      </ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent"><table width="490px" border="0">
        <form id="form_Buyer" name="form_Buyer" method="POST" action="Register.php">
      <tr>
        <td width="132" height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Name</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="text" id="NameFieldID" class="resizedTextbox"/></td>
        <td width="11" height="30">&nbsp;</td>
        </tr>
      <tr>
        <td width="132" height="5"></td>
        <td height="5" colspan="2"></td>
        <td width="11" height="5"></td>
        </tr>
      <tr>
        <td width="132" height="60"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Address</div></font></td>
        <td height="60" colspan="2" bgcolor="#F2F2F2"><textarea class="resizedTextbox3" id="AddresfieldID"></textarea></td>
        <td width="11" height="60"><font color="#FFFFFF" face="Segoe UI"><center></center></font></td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">eMail</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="text" class="resizedTextbox" id="eMailfieldID"/></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Password</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="password" class="resizedTextbox" id="PasswordFieldID"/></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Confirm Password</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="password" class="resizedTextbox" id="ConfirmPasswordFieldID"/></td>
        <td height="30"></td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"></td>
        <td height="30" colspan="2"><font color="#848484" size="1" face="Segoe UI"><p>By clicking Register, you agree that you have read and accepted the eStore User Agreement and User Privacy Notice and that you are at least 18 years old.</p></font></td>
        <td height="30"></td>
      </tr>
      <tr>
        <td height="5px" colspan="4"></td>
        </tr>
      <tr>
        <td height="40"></td>
        <td width="214" height="40">&nbsp;</td>
        <td width="115" height="40"><input type="image" src="Images/Register.png" onclick="validate()" /></td>
        <td height="30"></td>
      </tr>
      </form>
    </table></div>
        <div class="TabbedPanelsContent"><table width="490px" border="0">
        <form id="form_Supplier" name="form_Supplier" method="POST" action="Register.php">
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Brand Name</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="text" class="resizedTextbox" id="BrandNameFieldID"/></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5" colspan="4"></td>
        </tr>
      <tr>
        <td height="60"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Description</div></font></td>
        <td height="60" colspan="2" bgcolor="#F2F2F2"><textarea class="resizedTextbox3" id="DescriptionFieldID"></textarea></td>
        <td height="60">&nbsp;</td>
      </tr>
      <tr>
        <td height="5" colspan="4"></td>
        </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">First Name</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="text" class="resizedTextbox" id="FirstNameFieldID"/></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5" colspan="4"></td>
        </tr>
      <tr>
        <td width="132" height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Last Name</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="text" class="resizedTextbox" id="LastNameFieldID"/></td>
        <td width="11" height="30">&nbsp;</td>
        </tr>
      <tr>
        <td width="132" height="5"></td>
        <td height="5" colspan="2"></td>
        <td width="11" height="5"></td>
        </tr>
      <tr>
        <td width="132" height="60"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Address</div></font></td>
        <td height="60" colspan="2" bgcolor="#F2F2F2"><textarea class="resizedTextbox3" id="AddresfieldID2"></textarea></td>
        <td width="11" height="60"><font color="#FFFFFF" face="Segoe UI"><center></center></font></td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Telephone</div></font></td>
        <td height="30" colspan="2" bgcolor="#FAFAFA"><table width="100%" border="0">
          <tr>
            <td width="26%" bgcolor="#FFFFFF"><span class="custom-dropdown custom-dropdown--white">              
              <select name="countryList"  id="countryList" style="width:100px" class="custom-dropdown__select custom-dropdown__select--white">
                <option value="+94">Sri Lanka</option>
                <option value="+94">USA</option>
                <option value="+94">UK</option>
                <option value="+94">India</option>
                <option value="+94">Dubai</option>
                <option value="+94">China</option>
                <option value="+94">Japan</option>
                <option value="+94">Thailand</option>
                <option value="+94">Pakistan</option>
                <option value="+94">Malaysia</option
                ><option value="+94">Select Country</option>
              </select>
              </span>
           </td>
            <td width="74%" bgcolor="#F2F2F2"><input type="text" class="resizedTextbox" style="width:220px" id="TelephoneFieldID"/></td>
          </tr>
        </table></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5" colspan="4"></td>
        </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">eMail</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="text" class="resizedTextbox" id="eMailfieldID2"/></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Password</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="password" class="resizedTextbox" id="PasswordFieldID2"/></td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Confirm Password</div></font></td>
        <td height="30" colspan="2" bgcolor="#F2F2F2"><input type="password" class="resizedTextbox" id="ConfirmPasswordFieldID2"/></td>
        <td height="30"></td>
      </tr>
      <tr>
        <td height="5"></td>
        <td height="5" colspan="2"></td>
        <td height="5"></td>
      </tr>
      <tr>
        <td height="30"></td>
        <td height="30" colspan="2"><font color="#848484" size="1" face="Segoe UI"><p>By clicking Register, you agree that you have read and accepted the eStore User Agreement and User Privacy Notice and that you are at least 18 years old.</p></font></td>
        <td height="30"></td>
      </tr>
      <tr>
        <td height="5" colspan="4"></td>
        </tr>
      <tr>
        <td height="40"></td>
        <td width="214" height="40">&nbsp;</td>
        <td width="115" height="40"><input type="image" src="Images/Register.png" onclick="validate2()" /></td>
        <td height="30"></td>
      </tr>
      </form>
    </table></div>
      </div>
    </div></td>
    <td width="%" rowspan="5"></td>
  </tr>
  <tr>
    <td width="99" height="250"></td>
    <td height="250"  width="300"colspan="2"> <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 8"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='300' height='250' />";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?></td>
    <td width="99" height="250"></td>
  </tr>
  <tr>
    <td width="99" height="2"></td>
    <td height="2" colspan="2"></td>
    <td width="99" height="2"></td>
  </tr>
  <tr>
    <td width="99" height="150"></td>
    <td width="150" height="150"> <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 9"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='146' height='150' />";						   				   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?></td>
    <td width="150" height="150"> <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 10"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='146' height='150' />";						   				   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?></td>
    <td width="99" height="150"></td>
  </tr>
  <tr>
    <td height="88" colspan="4"><table width="495" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table bgcolor="#F2F2F2" width="100%" border="0" align="center">
  <tr>
    <td width="%" height="32px"></td>
    <td width="32" height="32px"><img src="Images/FB.jpg" width="32" height="32" /></td>
    <td width="32" height="32px"><img src="Images/YT.jpg" width="32" height="32" /></td>
    <td width="32" height="32px"><img src="Images/Tw.jpg" width="32" height="32" /></td>
    <td width="32" height="32px"><img src="Images/G+.jpg" width="32" height="32" /></td>
    <td width="852" height="32px"></td>
    <td width="%" height="32px"></td>
  </tr>
</table>
<table bgcolor="#F2F2F2" height="20px" width="100%" border="0" align="center">
  <tr>
    <td height="20px" width="%"></td>
    <td height="20px" width="499"><p><font face="Segoe UI">Copyright © 2015 RFabrics.com; All Rights Reserved. <a href="User_Agreement.php">User Agreement</a>, <a href="Privacy.php">Privacy and Cookies</a></font></p></td>
    <td height="20px" width="499">&nbsp;</td>
    <td height="20px" width="%"></td>
  </tr>
</table>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
