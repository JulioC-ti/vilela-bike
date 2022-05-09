<?php

namespace App\Model;

class Aluguel
{
    public function insertAluguel($data)
    {
        try {
            $sql = "INSERT INTO tb_aluguel(id_aluguel, retirada, entrega, observacao, tb_bicicleta_id_bicicleta, tb_cliente_id, tb_usuario_id_user) VALUES (?,?,?,?,?,?,?)";
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

    public function listAluguel()
    {
        $sql = "SELECT * FROM tb_aluguel ORDER BY id_aluguel DESC";
        $list = Sql::getList($sql);
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