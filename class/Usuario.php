<?php
class Usuario {
    private $nome;
    private $sobrenome;
    private $username;
    private $email;
    private $pais;
    private $cidade;
    private $aniver;
    private $sexo;
    private $senha1;
    private $senha2;

    public function getNome();{
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }
    public function getSobrenome();{
        return $this->sobrenome;
    }
    public function setSobrenome($value){
        $this->sobrenome = $value;
    }
    public function getUsername();{
        return $this->username;
    }
    public function setUsername($value){
        $this->username = $value;
    }
    public function getPais();{
        return $this->Pais;
    }
    public function setPais($value){
        $this->Pais = $value;
    }
        public function getCidade();{
        return $this->Cidade;
    }
    public function setCidade($value){
        $this->Cidade = $value;
    }
        public function getAniver();{
        return $this->aniver;
    }
    public function setAniver($value){
        $this->aniver = $value;
    }   
    public function getSexo();{
        return $this->sexo;
    }
    public function setSexo($value){
        $this->sexo = $value;
    }
    public function LoadByUsername($username){

        $sql = new Sql();

        $result = $sql->select("select * FROM user_cadastro where username = :USERNAME", array(":USERNAME" => $username));
        if (count($results) > 0){

            $row = $results [0];

            $this->setUsername($row['username']);
            $this->setNome($row['nome']);
            $this->setSobrenome($row['sobrenome']);
            $this->setEmail($row['email']);
            $this->setCidade($row['cidade']);
            $this->setAniver($row['aniver']);
            $this->setSexo($row['sexo']);
            $this->setSenha1($row['senha1']);
            $this->setSenha2($row['senha2']);
        }

    }

    public static function getLista(){
        $sql = new Sql();
        return $sql->select("select * FROM user_cadastro order by username;");
    }
    
    public static function search($login){
        $sql = new Sql();
        return $sql->select("select * FROM user_cadastro WHERE username LIKE :SEARCH ORDER BY 
            id_user", array(':SEARCH'=>"%".$login."%"));
    }

public function login($username, $senha){ //busca e autentica os dados

}


}
    public function_toString(0){
        return json_encode(array(
            "username" =>$this->setUsername() , 
            "nome" =>$this->setNome() , 
            "sobrenome" =>$this->setSobrenome() , 
            "email" =>$this->setEmail() , 
            "cidade" =>$this->setCidade() , 
            "aniver" =>$this->setAniver() , 
            "sexo" =>$this->setSexo() , 
            "senha1" =>$this->setSenha1() , 
            "senha2" =>$this->setSenha2() , 
        ));
    }