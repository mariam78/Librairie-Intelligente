<?php

    //Start session

    session_start();    

    //Unset the variables stored in session

    unset($_SESSION['SESS_MEMBER_ID']);

    unset($_SESSION['SESS_FIRST_NAME']);

    unset($_SESSION['SESS_LAST_NAME']);

?>
<form name="loginform" action="login.php" method="post">

<table width="300" border="0" align="center" cellpadding="2" cellspacing="5">

  <tr>

    <td colspan="2">


         <?php

            if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {

            echo '<ul class="err">';

            foreach($_SESSION['ERRMSG_ARR'] as $msg) {

                echo '<li>',$msg,'</li>'; 

                }

            echo '</ul>';

            unset($_SESSION['ERRMSG_ARR']);

            }

        ?>

    </td>

  </tr>

  <tr>

    <td width="116"><div align="right">Email</div></td>

    <td width="177"><input name="mail" type="text" /></td>

  </tr>

  <tr>

    <td><div align="right">Password</div></td>

    <td><input name="password" type="text" /></td>

  </tr>

  <tr>

    <td><div align="right"></div></td>

    <td><input name="" type="submit" value="connexion" /></td>

  </tr>

</table>

</form>