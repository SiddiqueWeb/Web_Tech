<?php


?>
<html>
<head>
</head>
<form style="text-align: center;background-color: darkgray ;width: 500px; margin-left: 350px" method="post" action="login.php" >


 Username:
    <input type="text" name="un"
           style="box-sizing: border-box;
            width:25%;
            align: center;
            padding: 12px;
            border: 1px solid #ccc;

            box-sizing: border-box;
            padding-left: 10px;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;" /><br/>
Fullname:
	<input type="text" name="fn"
           style="box-sizing: border-box;
            width:25%;
            align: center;
            padding: 12px;
            border: 1px solid #ccc;

            box-sizing: border-box;
            padding-left: 10px;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;" /><br/>
			
Email:
    <input type="email" name="Email"
           style="box-sizing: border-box;
            width:25%;
            align: center;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-sizing: border-box;
            padding-left: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;" />
    <br/>
 Phone:
    <input type="text" name="Phone"
           style="box-sizing: border-box;
            width:25%;
            align: center;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 2px;
            box-sizing: border-box;
            padding-left: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;"
    /><br/>
Password:
    <input type="Password" name="pw"
           style="box-sizing: border-box;
            width:25%;
            align: center;
            padding: 12px;
            border: 1px solid #ccc;

            box-sizing: border-box;
            padding-left: 10px;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;" /><br/>
			
Confirm Password:
    <input type="Password" name="pw2"
           style="box-sizing: border-box;
            width:25%;
            align: center;
            padding: 12px;
            border: 1px solid #ccc;

            box-sizing: border-box;
            padding-left: 10px;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;" /><br/>
  Gender: 
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other<br>
	Education:
  <input type="checkbox" name="Education[]" value="SSc">SSC
  <input type="checkbox" name="Education[]" value="HSC"> HSC
  <input type="checkbox" name="Education[]" value="BSC"> BSC
  <input type="checkbox" name="Education[]" value="MSC"> MSC
    
    <br/>
    <br/>

   
    <input type="submit" value="Submit" style=" background-color: #45a049;"/>
    <input type="reset" name="clear" style="background-color: #45a049;"/>

</form>

</form>
</html>
