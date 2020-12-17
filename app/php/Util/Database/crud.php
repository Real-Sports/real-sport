<?php

    //error_reporting(0);

    //Packages
    include 'connection.php';

    class Crud{

        //INSERT
        public function insert($table_name,$columns,$values){
            //sql statement
            $sql="INSERT INTO ".$table_name." (";
            //forming column within ()
            $sql=$sql.$columns[0];
            for($i=1;$i<count($columns);$i++){
                $sql=$sql.",".$columns[$i];
            }
            //forming values within ()
            $sql=$sql.") VALUES (";
            $sql=$sql."UPPER('".$values[0]."')";
            for($i=1;$i<count($values);$i++){
                $sql=$sql.",UPPER('".$values[$i]."')";
            }
            $sql=$sql.");";
            if($GLOBALS['connection']->query($sql)){
                //Insertion successfull
                $_SESSION['message']="Insertion successfull";;
                return $GLOBALS['connection']->insert_id;
            }else{
                //something went wrong
                $_SESSION['message']="Insertion failed!";
            }
        }

        //UPDATE
        public function update($table_name,$id,$columns,$values){
            //sql statement
            $sql="UPDATE ".$table_name." SET ";
            //forming key value pair
            $iteration=count($values);
            for($i=0;$i<$iteration-1;$i++){
                $sql=$sql.$columns[$i]."=UPPER('".$values[$i]."'),";
            }
            $sql=$sql.$columns[$iteration-1]."=UPPER('".$values[$iteration-1]."') WHERE id='".$id."';";
            if($GLOBALS['connection']->query($sql)){
                //Updation successfull
                $_SESSION['message']="Update successfull";
            }else{
                //something went wrong
                $_SESSION['message']="Updation Failed! ";
            }
        }

        //DELETE
        public function delete($table_name,$id){
            $sql="DELETE FROM ".$table_name." WHERE id=".$id;
            if($GLOBALS['connection']->query($sql)){
                //Deletion successfull
                $_SESSION['message']="Deletion successfull";
            }else{
                //something went wrong
                $_SESSION['message']="Deletion Failed!";
            }
        }

        //SELECT
        //One
        public function select_one($table_name,$id){
            $sql="SELECT * FROM ".$table_name." WHERE id=".$id.";";
            $result=$GLOBALS['connection']->query($sql);
            if($result->num_rows>0){
                return $result;
            }else{
                //no data available
                return false;
            }
        }
        //All
        public function select_all($table_name){
            $sql="SELECT * FROM ".$table_name." ORDER BY id DESC;";
            $result=$GLOBALS['connection']->query($sql);
            if($result->num_rows>0){
                return $result;
            }else{
                //no data available
                return false;
            } 
        }
        //Contraint
        public function select_contraint($table_name,$constraint){
            $sql="SELECT * FROM ".$table_name." ".$constraint." ORDER BY id DESC;";
            $result=$GLOBALS['connection']->query($sql);
            if($result->num_rows>0){
                return $result;
            }else{
                //no data available
                return false;
            }
        }
        //Custom
        public function select_custom($sql){
            $result=$GLOBALS['connection']->query($sql);
            if($result->num_rows>0){
                return $result;
            }else{
                //no data available
                return false;
            }
        }
    }

?>