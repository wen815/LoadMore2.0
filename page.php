<style>
    ul li{list-style: none;}
</style>
<section id="s1">
<?php
include'conn.php';
$page=$_GET['page'];
$pagesize=$page*5;

     $q="SELECT * FROM list";  
 $count=$conne->getRows($q);
 $pagenum=ceil($count/$pagesize);

    $sql="SELECT * FROM list ORDER BY id LIMIT 0,$pagesize";
    $array=$conne->getRowsArray($sql);
    foreach ($array as $key => $title) {
       $id=(int)$array[$key]['id'];     
for($i=1;$i<10;$i++){
    if($id==$i*5+1){
        $i+=1;
        echo "<b>第".$i."页</b>";
    }
}
      echo "<ul><li><a>".$id."</ul></li></a>";       
    }



         ?>
</section>
<section id="s2">
    <?php   
if($pagenum!=1){
       echo "<button onclick=ajaxfunction($page+1)>Next</button>";   
}
   
            
             ?>
</section>