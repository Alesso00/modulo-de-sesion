<?php
class Login {
    public $conexion;
    public function __construct($conexion)
  {
     $this -> conexion = $conexion;   
    }

    public function login ($user, $password){
        try {
            $query = "SELECT* FROM usuario WHERE usuario =:usuario AND password =:password";
            $pdo = $this->conexion-> getConnection();
            $statement = $pdo ->prepare ($query);
            $statement ->bindParam(':usuario', $user);
            $statement ->bindParam(':password', $password);
            $statement->execute();

            if ($statement-> rowCount()==1){
                return true;
            }
            else{
                return false;
            }
        } catch(PDOException $e){
            echo "ERROR EN LA CONSULTA:". $e->getMessage();
return false;
        }
    }
}

?>