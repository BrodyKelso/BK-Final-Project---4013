<?php
function get_db_connection(){
   
    $conn = new mysqli('159.89.47.44', 'brodypke_FinalProjectUser', 'BnY3O@p9Nktd', 'brodypke_Final_Project_4013');
    
    
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>