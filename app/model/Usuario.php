<?php

namespace App\Model;

class Usuario
{
    public function insertUsuario($data)
    {
        try {
            $sql = "INSERT INTO `tb_usuario`(`login`, `senha`, `nome_usuario`) VALUES (?,?,?)";
            Sql::setData($sql, $data);
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function deleteUsuario($dados)
    {
        try {
            $sql = "DELETE FROM tb_usuario WHERE id_user=?";
            Sql::setData($sql, [$dados]);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function updateUsuario($dados)
    {
        try {
            $sql = "UPDATE tb_usuario SET nome_usuario=? WHERE id_user=?";
            Sql::setData($sql, $dados);
            return true;
        } catch (\Exception $e) {
            echo $e;
        }
    }

    public function listUsuario()
    {
        $sql = "SELECT * FROM tb_usuario ORDER BY id_user DESC";
        $list = Sql::getList($sql);
        return $list;
    }

    public function buscarUsuario($email)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE email = ?";
            $list = Sql::getData($sql, [$email]);
            return $list;
        } catch (\Exception $e) {
            echo "ERRO: " . $e;
        }
    }
}