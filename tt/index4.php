<?php


    if (@$_POST["Submit"] == "提交") {
        $user = @$_POST['user'];
        $checkbox = @$_POST['checkbox'];
        $checkbox2 = @$_POST['checkbox2'];
        $checkbox3 = @$_POST['checkbox3'];
        $checkbox4 = @$_POST['checkbox4'];
    }
?>

<table width="260" border="1" cellpadding="0" cellspacing="2" bordercolor="#0066CC">
<form name="form1" method="post" action="index4.php">
    <tr align="center"><td height="25" colspan="2"><span class="style1">个人爱好统计</span></td></tr>
    <tr>
        <td width="98" height="25" align="center"><span class="style2">用户名：</span></td>
        <td width="156"><input name="user" type="text" id="user" size="20" maxlength="30"></td>
    </tr>
    <tr>
        <td height="60" align="center"><span class="style2">个人爱好选项：</span></td>
        <td valign="middle">
            <p class="style2">
                体育<input type="checkbox" name="checkbox" value="体育">
                文学<input type="checkbox" name="checkbox2" value="文学">
            </p>
            <p class="style2">
                音乐<input type="checkbox" name="checkbox3" value="音乐">
                美术<input type="checkbox" name="checkbox4" value="美术">
            </p>
        </td>
    </tr>
    <tr>
        <td height="25" align="center">&nbsp;</td>
        <td valign="middle"><input type="submit" name="Submit" value="提交"></td>
    </tr>
    <tr>
        <td height="25" align="center" class="style2"><?php echo $user;?></td>
        <td valign="middle" class="style2"><?php echo $checkbox;?>&nbsp;<?php echo $checkbox2;?>&nbsp;<?php echo $checkbox3;?>&nbsp;<?php echo $checkbox4;?></td>
    </tr>
</form>
</table>

