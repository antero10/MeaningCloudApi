<?php

/**
 * MeaningCloud Class Doc Comment.
 *
 * PHP version 5.5
 *
 * @category MeaningCloud
 *
 * @author   "Gustavo Sánchez" <gustavo@bunkerdb.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU General Public License 3.0
 *
 * @link     https://github.com/BunkerDB/sentimental
 */


/**
 * MeaningCloud Class Doc Comment.
 *
 * @category Class
 *
 * @author   "Gustavo Sánchez" <gustavo@bunkerdb.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU General Public License 3.0
 *
 * @link     https://github.com/BunkerDB/sentimental
 */

require_once 'MeaningCloudResponse.php';

class MeaningCloudAPI
{
    const MEANINGCLOUD_API_URL = 'https://api.meaningcloud.com/sentiment-2.0';
    private $api_key;
    private $model;
    
    
    /**
     * __construct function.
     *
     * @param string $api_key - Meaning Cloud API Key
     * @param string $model      - API model type (es-general,en-general,fr-general)
     */
    
    public function __construct($api_key,$model) 
    {
        $this->api_key = $api_key;
        $this->model = $model;
    }
    
    /*
     * getSentimentText function
     * @param string $text - Text to be clasified
     * @param string $concept (OPTIONAL) - The concept of the text, This can improve the performance of the classifier
     */
    
    public function getSentimentText($text,$concept = 'auto') 
    {
        $data = http_build_query(array('key'=>$this->api_key,
                                'model'=>$this->model,
                                'txt'=>$text,
                                'concept'=>$concept)); 
        $context = stream_context_create(array('http'=>array(
            'method'=>'POST',
            'header'=>
            'Content-type: application/x-www-form-urlencoded'."\r\n".
            'Content-Length: '.strlen($data)."\r\n",
            'content'=>$data)));
        try {
            $fd = fopen(self::MEANINGCLOUD_API_URL, 'r', false, $context);
            $response = stream_get_contents($fd);
            fclose($fd); 
        } catch (Exception $ex) {
            throw $ex;
        }
        return  new MeaningCloudResponse(json_decode($response,true));

    }
    
   
    
}
