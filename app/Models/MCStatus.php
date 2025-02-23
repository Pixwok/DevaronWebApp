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
        $api = "https://api.mcsrvstat.us/3/". $serverAddr;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $api);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0');

        $response = curl_exec($curl);

        return $response;
    }
}
?>