<?php
   class db{
   
   	//Connect to database 
   
       public static function open(){ // opens the db connection. Specify different databases for local and live server and it will automatically select the correct one
   		$servers = array('localhost', '127.0.0.1', 'localhost');
   		if(in_array($_SERVER['HTTP_HOST'], $servers)){ //for localhost
   			$dbuser = 'root';
   			$dbpwd = '';
   			$dbname = 'carcentive';
   			$dbserver = 'localhost';
   		}else{ //for live server
              $dbuser = 'carcenti_carcentive_admin';
   			$dbpwd = 'atecco@123';
   			$dbname = 'carcenti_carcentive2';
   			$dbserver = 'localhost';
   		}
   		$db = mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
   
   
   		if ($db->connect_errno > 0){
   		  echo "Failed to connect to MySQL: " . $db->connect_error;
   		  }
   		  
   		 return $db;
   		}
   
       //Close connection
   
   		public static function close(&$db){
   		$db->close();
   	}//End Function
   
       
   	//Get Multiple records
   	public static function getRecords($query, $cursor=NULL, $pageSize=NULL){  
   	// Gets multiple records and returns associative array
   		$db = db::open();
   		if (!is_null($cursor) && !is_null($pageSize)){
   			$query .= " LIMIT ".$cursor.", ".$pageSize;
   			}
   		$result = $db->query($query);
   		if(!$result){
   			die('There was an error running the query [' . $db->error . ']');
   		}
   		if($result->num_rows>0){
   			$i=0;
   
   			while ($row = $result->fetch_assoc()){
   				$recordset[$i] = $row;  //placing entire row at single index 
   				$i++;
   				}
   			}
   			else
   			{
   				$recordset = false;
   
   			}
   		db::close($db);
   		return ($recordset);
   	}//End Function
   
      // Gets single record and returns single associative array
   	public static function getRecord($query){ 
   		$db = db::open();
   		$result = $db->query($query);
   		if($result->num_rows>0){
   			$recordset = $result->fetch_assoc();
   			}else{
   				$recordset = false;
   			}
   		db::close($db);
   		return ($recordset);
   	}//End Function
   
   	public static function getCell($query){ // Returns single value
   		$db = db::open();
   		$result = $db->query($query);
   		if($result->num_rows>0){
   			$cell = $result->fetch_array();
   			return $cell[0];
   			}else{
   				$cell = false;
   			}
   		return $cell;
   	}
   public static function deleteRecord($table, $pk){ // Gets the Id of row to be deleted and table name
   		$db = db::open();
   		$query = "delete from ".$table." where cell_num='$pk'";
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}
   
   public static function deleteRecord1($table, $pk){ // Gets the Id of row to be deleted and table name
   		$db = db::open();
   		$query = "delete from ".$table." where b_id='$pk'";
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}
   public static function deleteRecord2($table, $pk){ // Gets the Id of row to be deleted and table name
   		$db = db::open();
   		$query = "delete from ".$table." where pid='$pk'";
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}
   public static function deleteRecord3($table, $pk, $pk2, $pk3){ 
   		$db = db::open();
   		$query = "delete from ".$table." where order_id='$pk' AND item_number='$pk2' AND shop_id='$pk3'";
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}  
   public static function deleteRecord4($table, $pk){ // Gets the Id of row to be deleted and table name
   		$db = db::open();
   		$query = "delete from ".$table." where order_id='$pk'";
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}
   public static function deleteRecord5($table, $pk,$pk1){ // Gets the Id of row to be deleted and table name
   		$db = db::open();
   		$query = "delete from ".$table." where order_id='$pk' AND item_number='$pk1'";
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}
   	public static function insertRecord($query){ // Gets a formatted query to insert a row and returns the ID of last added record
   		$db = db::open();
   		$db->query($query);
   		$result = $db->insert_id;
   		db::close($db);
   		return ($result);
   	}
   
   	public static function query($query){  // Executes any query
   		$db = db::open();
   		$result = $db->query($query);
   		db::close($db);
   		return ($result);
   	}
   
   
   }
   
   
   
   ?>