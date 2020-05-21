<?php
// include 'class/SQLGenerator.php';
class SQLGenerator{
    public $tablename = "users";
    function insert($data){
        return ("INSERT INTO "."'".$this->tablename."'"." SET username = "."'".$data['username']."'".", email="."'".$data['email']."'".", password="."'".$data['password']."'".", role="."'".$data['role']."'");
        //  return("Hello".$this->tablename);
    }
    function select($email){
        return ("SELECT * FROM "."'".$this->tablename."'"." where email = "."'".$email."'");

    }
    function delete($email){
        return ("DELETE FROM "."'".$this->tablename."'"." where email = "."'".$email."'");

    }
    function update($data){
        return ("UPDATE "."'".$this->tablename."'"." SET username = "."'".$data['username']."'".", email="."'".$data['email']."'".", password="."'".$data['password']."'".", role="."'".$data['role']."'"." where email = "."'".$data['email']."'");

    }
}
 
    $obj = new SQLGenerator();
    $ref1 =['username'=> 'admin','email'=>'admin@khwopa.edu.np','password'=>'password','role'=>'Admin'];    
    $sql_for_insert = $obj->insert($ref1);
    $sql_for_select = $obj->select($ref1['email']);
    $sql_for_delete = $obj->delete($ref1['email']);
    $sql_for_update = $obj->update($ref1);
    // print_r($ref1)
    $sql = [
        'SQL for Inserting'=> $sql_for_insert,
        'SQL for Selecting'=> $sql_for_select,
        'SQL for Deleting'=> $sql_for_delete,
        'SQL for Updating'=> $sql_for_update,
    ];
    echo "<pre>";
    print_r($sql);
    echo "</pre>";

?>