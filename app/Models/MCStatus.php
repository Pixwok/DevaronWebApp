<?php
namespace App\Models;

use CodeIgniter\Model;

class MCStatus extends Model
{
    /**
     * Requête API à Minecraft Server Status API
     * @param string $serverAddr Adresse du serveur  
     */
    public function requestAPI($serverAddr)
    {
        $curl = \Config\Services::curlrequest();
        $api = "https://api.mcsrvstat.us/3/". $serverAddr;

        $response = $curl->request('GET', $api, [
            'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json'],
            ]
        );
        $data = $response->getBody();

        return json_decode($data);
    }
}
?>