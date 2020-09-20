<?php

class Users extends Conexao{

    public function setLogged($email,$password){
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email, $email");
        $sql->bindValue(":password, $password");
        $sql->execute();

        if($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $id = $sql['id'];

            $_SESSION['user'] = $id;

            header("Location: ../view/index.php?login_sucess");
        }
    }
}

?>