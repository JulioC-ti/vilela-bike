<?php
namespace App\Controller;
use App\Model\Cliente;
use App\Model\Usuario;
class ClienteController{
    public static function cliente(){
        //Verifica o tipo de requisição que foi enviado
        if($_SERVER['REQUEST_METHOD'] == "POST"){
           //Cadastrar o Cliente
            // Passo: Validar os dados enviados pelo formulário, e atribuir na variável erro
            $erro = [];
            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome = $_POST['nome'];
            }else{
                array_push($erro,"Preencha o nome Corretamente");
            }
            if(isset($_POST['cpf']) && !empty($_POST['cpf'])){
                $cpf = $_POST['cpf'];
            }else{
                array_push($erro,"Preencha o CPF Corretamente");
            }
            if(isset($_POST['telefone']) && !empty($_POST['telefone'])){
                $nome = $_POST['telefone'];
            }else{
                array_push($erro,"Preencha o telefone Corretamente");
            }
            if(isset($_POST['endereco']) && !empty($_POST['endereco'])){
                $nome = $_POST['endereco'];
            }else{
                array_push($erro,"Preencha o nome endereco");
            }
            if(isset($_POST['beirro']) && !empty($_POST['beirro'])){
                $nome = $_POST['beirro'];
            }else{
                array_push($erro,"Preencha o beirro Corretamente");
            }
            if(isset($_POST['cidade']) && !empty($_POST['cidade'])){
                $nome = $_POST['cidade'];
            }else{
                array_push($erro,"Preencha a cidade Corretamente");
            }
            //Se houverem erros o sistema retorna para o usuário
            if(count($erro)>0){
                return $erro;
            }
            else{
                //Se não Cria o objeto cliente
                $cliente = new Cliente();
                //Atribui os dados validados anteiormente no array de cadastro
                $data = [
                    $nome = $_POST['nome'],
                    $cpf = $_POST['cpf'],
                    $telefone = $_POST['telefone'],
                    $endereco = $_POST['endereco'],
                    $bairro = $_POST['bairro'],
                    $cidade = $_POST['cidade'],
                    1
                ];

                if($cliente->insertCliente($data)){
                   array_push($erro, "Usuário cadastrado com sucesso!");
                   return $erro;
                }else{
                    array_push($erro, "O Cliente Não pode ser cadastrado, contate o Administrador do Sistema!.");
                    return $erro;
                }

            }
        }
    }
    /**
     * A função abaixo efetua o login de usuário e inicia a sessão, dentro do POST passe obrigatoriamente
     * os valores $login=$_POST['login'] $senha=$_POST['senha']
     */
    public static function login(){
    
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
            $login= $_POST['login'];
            $senha =$_POST['senha'];
        
            $erro = [];
            $user = new Usuario();
            $usuario =$user->buscarUsuario($login);
            
            if(count($usuario) > 0){
                if($usuario[0]['senha'] === $senha){
                    session_regenerate_id();
                    $_SESSION['logado'] = $usuario[0];
                    header("location:index.php");
                }else{
                    array_push($erro,"Login ou senha inválidos!");
                    return $erro;
                }
            }else{
                array_push($erro,"Usuário não localizado, ou não existe");
                return $erro;
            }

        }
    }
    public static function isLogged(){
        
        if(isset($_SESSION['logado'])){
            header("location:index.php");
        }
    }
    /**
     * Verifica se o usuário está logado e se ele é um admin
     */
    public static function isBloqued(){
        
        if(!isset($_SESSION['logado'])){
            header("location:index.php");
        }elseif($_SESSION['logado']['tipo_acesso'] != 'admin'){
            header("location:index.php");
        }
    }
    
}