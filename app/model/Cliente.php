<?php

namespace App\Model;

class Cliente
{
    public function insertCliente($data)
    {
        try {
            $sql = "INSERT INTO tb_cliente(nome, cpf, telefone, endereco, bairro, cidade, status_bike, user_id) VALUES (?,?,?,?,?,?,?,?)";
            Sql::setData($sql, $data);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function deleteCliente($dados)
    {
        try {
            $sql = "DELETE FROM tb_cliente WHERE id=?";
            Sql::setData($sql, [$dados]);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function updateCliente($dados)
    {
        try {
            $sql = "UPDATE tb_cliente SET nome=?,cpf=?,telefone=?,endereco=?,bairro=?,cidade=?,status_bike=?,user_id=? WHERE id =?";
            Sql::setData($sql, $dados);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function listCliente($order = null)
    {
        if($order == null){
            $sql = "SELECT * FROM tb_cliente ORDER BY id DESC";
        }else{
            $sql = "SELECT * FROM tb_cliente ORDER BY id ASC";
        }
        $list = Sql::getList($sql);
        return $list;
    }

    public function buscarCliente($field,$valor)
    {
        try {
            $sql = "SELECT * FROM tb_cliente WHERE $field = ?";
            $list = Sql::getData($sql, [$valor]);
            return $list;
        } catch (\Exception $e) {
            echo "ERRO: " . $e;
        }
    }
    public function mudaStatus($idcliente)
    {

        $result = $this->buscarCliente('id',$idcliente);
        if($result[0]['status_cliente']){
            $sql = "UPDATE tb_cliente SET status_cliente = ? WHERE id =?";
            Sql::setData($sql,[0,$idcliente]);
            return true;
        }else{
            $sql = "UPDATE tb_cliente SET status_cliente = ? WHERE id =?";
            Sql::setData($sql,[1,$idcliente]);
            return true;
        }
    }
}