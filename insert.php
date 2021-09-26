<?php
if ( isset ( $ _POST [ "mail_desc" ] ) )
{
termasuk ( "connect.php" ) ;
$ subject = mysqli_real_escape_string ( $ con, $ _POST [ "user_name" ] ) ;
$ comment = mysqli_real_escape_string ( $ con, $ _POST [ "mail_desc" ] ) ;
$ query = "INSERT INTO mail (user_name, mail_desc) VALUES ('$ user_name', '$ mail_desc')" ;
mysqli_query ( $ con, $ query ) ;
}
?>