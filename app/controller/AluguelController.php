<?php
namespace App\Controller;

use App\Model\Aluguel;

class AluguelController{
    public static function alugarBike(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $erro = array();
            if(!isset($_POST['data_entrega']) OR empty($_POST['data_entrega'])){
                array_push($erro,"O Campo data da entrega não pode ser vazio!");
            }
            if(!isset($_POST['cliente']) OR empty($_POST['cliente'])){
                array_push($erro,"Por Favor selecione um cliente");
            }
            
            if(count($erro) > 0){
                return $erro;
            }else{
                $data =[
                    $_POST['data_entrega'],
                    $_POST['observacao'],
                    $_POST['bicicleta'],
                    $_POST['cliente'],
                    $_POST['usuario'],
                ];
            }

            $aluguel = new Aluguel();

            if($aluguel->insertAluguel($data)){
                array_push($erro,'Aluguel realizado com sucesso!');
                return $erro;
            }else{
               array_push($erro,"Erro: ".$aluguel->insertAluguel($data));
               return $erro;
            }
        }
    }
}