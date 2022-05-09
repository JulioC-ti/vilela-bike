<?php

namespace App\Model;

class Bicicleta
{
    public function insertBicicleta($data)
    {
        try {
            $sql = "INSERT INTO tb_bicicleta(id_bicicleta, aro, cor, modelo, marca, status_bike) VALUES (?,?,?,?,?,?)";
            Sql::setData($sql, $data);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function deleteBicicleta($dados)
    {
        try {
            $sql = "DELETE FROM tb_bicicleta WHERE id=?";
            Sql::setData($sql, [$dados]);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function updateBicicleta($dados)
    {
        try {
            $sql = "UPDATE tb_bicicleta SET id_bicicleta=?,aro=?,cor=?,modelo=?,marca=?,status_bike=?,user_id=? WHERE id =?";
            Sql::setData($sql, $dados);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function listBicicleta()
    {
        $sql = "SELECT * FROM tb_bicicleta ORDER BY id_bicicleta DESC";
        $list = Sql::getList($sql);
        return $list;
    }

    public function buscarBicicleta($id_bicicleta)
    {
        try {
            $sql = "SELECT * FROM tb_bicicleta WHERE id_bicicleta= ?";
            $list = Sql::getData($sql, [$id_bicicleta]);
            return $list;
        } catch (\Exception $e) {
            echo "ERRO: " . $e;
        }
    }
}