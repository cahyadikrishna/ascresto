<?php
//file cek.php untuk cek data
$last = $_GET['last'];
$sql = "select * from kategori where id='$last'";
$rs = mysql_query($sql);
//output berupa json
if(mysql_num_rows($rs) > 0){
$lastSql = "select max(id) from kategori";
$lastId = mysql_fetch_array(mysql_query($lastSql));
echo '{"result":"new data","last":"'.$lastId[0].'"}';
}else{
echo '{"result":false}';
}