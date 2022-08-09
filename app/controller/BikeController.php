<?php

namespace App\Controller;

use App\Model\Bicicleta;
use App\Model\Upload;

class BikeController
{
    public function novaBike()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $upload = new Upload();
            $upload->foto = $_FILES['foto_bike'];
            $upload->dir = "img";
            $upload->size = 4000000;
            $upload->setNome($_POST['foto_bike']);
            
            $data = [
                $_POST['aro'],
                $_POST['cor'],
                $_POST['modelo'],
                $_POST['descricao'],
                $_POST['valor'],
                $_POST['marca'],
                $upload->sendImage()
            ];
            $bike = new Bicicleta();
            $bike->insertBicicleta($data);
        }
    }
}
