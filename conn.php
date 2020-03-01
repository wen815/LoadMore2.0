<?php
class opmysqli{
     //连接数据库
    function connect(){
        $this->conn=mysqli_connect("localhost", "root","root","up");  
    }
        //查询结果
      function mysqli_result($sql){
 	$this->result = mysqli_query($this->conn,$sql);     
           }
            //获取单条结果（数组）     
  	function getRow($sql){
		$this->mysqli_result($sql);
	while($row = mysqli_fetch_array($this->result,MYSQLI_ASSOC)) {
		 $this->row=$row;
                 return $this->row;
			}			
	}        
        //获取多条结果（数组）
	function getRowsArray($sql){
		$this->mysqli_result($sql);
	while($row = mysqli_fetch_array($this->result,MYSQLI_ASSOC)) {
		$this->rowsArray[] = $row;
			}
			return $this->rowsArray;	
	}  
    //查询结果数
      function getRows($sql){
                   $this->mysqli_result($sql);
  $this->rows_num= mysqli_num_rows($this->result);
          return $this->rows_num;
      }
          //影响行数
      function affRows($sql){
             $this->connect();
             mysqli_query($this->conn,$sql);
  $this->aff_rows_num= mysqli_affected_rows($this->conn);
            return $this->aff_rows_num;
      }
   //获得特定的字段值
 function getFields($sql,$fields){  
     $this->mysqli_result($sql);
   $tmpfld= mysqli_fetch_array($this->result);
  $this->fields=$tmpfld[$fields];
  return $this->fields;
 }

 	//关闭数据库
	function close_conn(){
mysqli_close($this->conn);	
	}
}
$conne=new opmysqli();
  $conne->connect();