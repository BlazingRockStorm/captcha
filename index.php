<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<form action="form.php" method=post>
<table>
 <tr>
  <td align="left">
   <label for="captcha">Captcha</label>
  </td>
  <td>
   <input type="text" name="txtCaptcha" maxlength="10" size="32" />
  </td>
  <td>
   <img src="random_image.php" />
  </td>
 </tr>
 <tr>
  <td> </td>
  <td>
   <input type=submit name=ok value="Check" />
  </td>
 </tr>
</table>
</form>