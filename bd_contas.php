<?php
    require_once 'connect.php';
 


class Usuario{
    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM contas WHERE email = :email AND snh = :snh";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("snh", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $_SESSION['id'] = $data['id'];
            header('location: index.php');
            return true;
            
        }

        else{
            header('location: login.php');
            return false;

        }

    } 

    public function logado($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM contas WHERE id = :id";

        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }




    
 

}
?>