<?php 
function perm($c, $start, $end) {
  if($start==$end){
   for($i=0;$i<=$end;$i++){
    echo($c[$i]);
   }
   echo "<br/>";
  }else{
   for($i=$start;$i<=$end;$i++){
    $temp=$c[$start];
    $c[$start]=$c[$i];
    $c[$i]=$temp;
    perm($c,$start+1,$end);
    $temp=$c[$start];
    $c[$start]=$c[$i];
    $c[$i]=$temp;
   }
  }
}
 perm(str_split("abcd"), 0, 3);


 ?>