<?php 
include('userhead.php');
?>
<?php
   session_start();
   
?>
<html>
<body>

<div style="width:40%;float:left;margin:0;">
			
        </div>
		
		<div style="width:60%;float:right;padding-center:60px;padding-top:20px;height:200px;">
            	<form method="post" action="usercpdata.php" onSubmit="return validatePassword();" >
				<table class="style1">
                   
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:black;">Change Password</span></td>
                        <td>
                            &nbsp;</td>
                    </tr>
					
                    <?php 
							
						
							$a= $_SESSION['uname'];
 //$id = mysqli_real_escape_string($db,$_GET['id']);

	//echo $_SESSION['uname'];
?>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Student ID: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="text" id="uid" name="uid" placeholder="" value="<?php echo $a; ?>"style="height:35px;background-color:white;border-radius:25px;width:250px;" required="">                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
							</tr>
							<tr>
							<td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Current Password: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="text" id="current" name="current" placeholder="" value=""style="height:35px;background-color:white;border-radius:25px;width:250px;" required="">                            &nbsp;</td>
							
							<td>
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">New Password: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="text" id="pass" name="pass" placeholder=""  value="" style="height:35px;background-color:white;border-radius:25px;width:250px;"required="">                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
							</tr>
							<tr>
							<td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;">Confirm Password: </span></td>
                        <td>&nbsp;
							<input class="form-control" type="text" id="cpass" name="cpass" placeholder=""  value=" "style="height:35px;background-color:white;border-radius:25px;width:250px;"required="">                            &nbsp;</td>
							
							<td>
                            &nbsp;</td>
                    </tr>
					


                    
                    
                    
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                           
						<td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input id="logi" type="submit" value="Submit" style="height:35px;background-color:#d5ec57;border-radius:25px;width:150px;"  /></td>
                        </td>
                        <td>
                            &nbsp;</td>
							
                    </tr>
                   
					
                </table>
                </form>
            </div>
		


</div>

	

</body>


	<script>
function validatePassword() {
var current,pass,cpass,output = true;

current = document.frmChange.current;
pass = document.frmChange.pass;
cpass = document.frmChange.cpass;

if(!current.value) {
current.focus();
document.getElementById("current").innerHTML = "required";
output = false;
}
else if(!pass.value) {
pass.focus();
document.getElementById("pass").innerHTML = "required";
output = false;
}
else if(!cpass.value) {
cpass.focus();
document.getElementById("cpass").innerHTML = "required";
output = false;
}
if(pass.value != cpass.value) {
pass.value="";
cpass.value="";
pass.focus();
document.getElementById("cpass").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
</html>