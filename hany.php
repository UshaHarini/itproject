<?php
include 'connect.php';
$query="select candidatename from candidates";
$result=mysqli_query($db,$query) or die("error querying database");
echo '<form id="myform">';
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<input type="radio" name="candidate" id="name2" value="'.$row['candidatename'].'" >'.$row['candidatename'].'</input><br />';

}
echo '</form>';
echo 'hello gud mrng';
?>
