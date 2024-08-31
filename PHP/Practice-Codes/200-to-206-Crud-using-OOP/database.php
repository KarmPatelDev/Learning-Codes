<?php

class Database{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "restapi";

    private $mysqli = "";
    private $result = array();
    private $conn = false;

    // Data Connection 
    public function __construct(){
        if(!$this->conn){ // check the connection establisted or not
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name); // connect
            $this->conn = true;

            if($this->mysqli->connect_error){ // check connected or not(error)
                array_push($this->result, $this->mysqli->connect_error); // store error to array
                return false;
            }
        }
        else{
            return true;
        }
    }

    // Data Insert To Database
    public function insert($table, $params = array()){
        if($this->tableExists($table)){
            // print_r($params);
            $table_columns = implode(', ', array_keys($params));
            $table_value = implode("', '", $params);
            echo $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";

            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->insert_id); // insert_id is inbuilt method
                return true;
            }
            else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
        else{
            return false;
        }
    }

    // Data Update To Database
    public function update($table, $params = array(), $where = null){
        if($this->tableExists($table)){
            // print_r($params);

            $args = array();
            foreach($params as $key => $value){
                $args[] = "$key = '$value'";
            }

            $sql = "UPDATE $table SET " . implode(', ', $args);
            if($where != null){
                $sql .= " WHERE $where";
            }

            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_rows); // insert_id is inbuilt method
                return true;
            }
            else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }

        }
        else{
            return false;
        }
    }

    // Data Delete TO Database
    public function delete($table, $where = null){
        if($this->tableExists($table)){
            // print_r($params);

            $sql = "DELETE FROM $table";
            if($where != null){
                $sql .= " WHERE $where";
            }

            if($this->mysqli->query($sql)){
                array_push($this->result, $this->mysqli->affected_rows); // insert_id is inbuilt method
                return true;
            }
            else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }

        }
        else{
            return false;
        }
    }

    // Data Select From Database
    public function select($table, $rows="*", $join = null, $where = null, $order = null, $limit = null){
        if($this->tableExists($table)){
            $sql = "SELECT $rows FROM $table";
            if($join != null){$sql .= " JOIN $join";}
            if($where != null){$sql .= " WHERE $where";}
            if($order != null){$sql .= " ORDER BY $order";}
            if($limit != null){
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $sql .= " LIMIT $start,$limit";
            }

            $query = $this->mysqli->query($sql);

            if($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }
            else{
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function pagination($table, $join = null, $where = null, $limit = null){
        if($this->tableExists($table)){
            if($limit != NULL){
                $sql = "SELECT COUNT(*) FROM $table";
                if($join != null){$sql .= " JOIN $join";}
                if($where != NULL){$sql .= " WHERE $where";}

                $query = $this->mysqli->query($sql);
                $total_record = $query->fetch_array();
                $total_record = $total_record[0];
                // echo $total_record;

                $total_pages = ceil($total_record / $limit);
                $url = basename($_SERVER['PHP_SELF']);  // it fetch file name from url

                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }
                else{
                    $page = 1;
                }

                $output = "<ul class='pagination'>";

                if($page > 1){
                    $output .= "<li><a href='$url?page=" . ($page - 1) . "'>Prev</a></li>";
                }

                if($total_record > $limit){
                    for($i = 1; $i <= $total_pages; $i++){
                        if($i == $page){
                            $cls = "class='active'";
                        }
                        else{
                            $cls = "";
                        }
                        $output .= "<li><a $cls href='$url?page=$i'>$i</a></li>";
                    }
                }

                if($total_pages > $page){
                    $output .= "<li><a href='$url?page=" . ($page + 1) . "'>Next</a></li>";
                }

                $output .= "</ul>";

                echo $output;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function sql($sql){
        $query = $this->mysqli->query($sql);

        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }
        else{
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }

    //Table Exists or not check
    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDB = $this->mysqli->query($sql);
        if($tableInDB){
            if($tableInDB->num_rows == 1){
                return true;
            }
            else{
                array_push($this->result, $table . " doesn not exist in this database.");
                return false;
            }
        }

    }

    //Get Result
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    // Data Connection Close
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }
        else{
            return false;
        }
    }

}