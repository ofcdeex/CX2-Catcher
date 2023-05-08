<?php

namespace Backend\Controllers;

class ApiController
{

    public function Catcher(?array $Request)
    {
        $header = getallheaders();

        $json = file_get_contents('Backend/Database/Requests.json');
        $data = json_decode($json);
        $data[] = [
            'host' => $header['Host'],
            'content_length' => $header['Content-Length'],
            'data' => json_decode(json_encode($Request['form']))
        ];
        file_put_contents('Backend/Database/Requests.json', json_encode($data));
    }

}