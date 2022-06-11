<?php

namespace App\Model;

class Aluguel
{
    public function insertAluguel($data)
    {
        try {
            $sql = "INSERT INTO tb_aluguel(entrega, observacao, tb_bicicleta_id_bicicleta, tb_cliente_id, tb_usuario_id_user) VALUES (?,?,?,?,?)";
            Sql::setData($sql, $data);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function deleteAluguel($dados)
    {
        try {
            $sql = "DELETE FROM tb_aluguel WHERE id=?";
            Sql::setData($sql, [$dados]);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function updateAluguel($dados)
    {
        try {
            $sql = "UPDATE tb_aluguel SET nome=?,cpf=?,telefone=?,endereco=?,bairro=?,cidade=?,user_id=? WHERE id =?";
            Sql::setData($sql, $dados);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function getAluguel($dados)
    {
        $sql = "SELECT id_aluguel,nome,cpf,telefone,endereco,bairro,cidade,status_cliente,nome_usuario,id_bicicleta,aro,cor, modelo,descricao,valor,marca,status_bike FROM tb_aluguel
        INNER JOIN tb_bicicleta ON tb_aluguel.tb_bicicleta_id_bicicleta = tb_bicicleta.id_bicicleta
        INNER JOIN tb_cliente ON tb_aluguel.tb_cliente_id = tb_cliente.id
        INNER JOIN tb_usuario ON tb_aluguel.tb_usuario_id_user = tb_usuario.id_user WHERE id_aluguel =? ORDER BY id_aluguel DESC";
        $list = Sql::getData($sql, [$dados]);;
        return $list;
    }

    public function buscarAluguel($cpf)
    {
        try {
            $sql = "SELECT * FROM tb_aluguel WHERE cpf = ?";
            $list = Sql::getData($sql, [$cpf]);
            return $list;
        } catch (\Exception $e) {
            echo "ERRO: " . $e;
        }
    }
}