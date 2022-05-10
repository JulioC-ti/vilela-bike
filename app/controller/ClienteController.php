<?php
namespace App\Controller;
use App\Model\Cliente;
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
}