<?php
namespace AlibabaApi\Request;

use AlibabaApi\Request\RequestInterface;
use AlibabaApi\Config\ConfigInterface;
use AlibabaApi\Operations\OperationInterface;

class Request implements RequestInterface{

    private $options = [];

    protected $requestScheme = 'https://eco.taobao.com/router/rest';

    protected $requestAuthScheme = 'https://oauth.taobao.com/token';

    protected $config;

    public function __construct(array $options = [])
    {
        $this->options = [];
    }

    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function perform(OperationInterface $operation)
    {
        $uri = $this->requestScheme;

        $data = $this->authSignature($operation);
        
        $return = $this->curlExec($uri,$data);

        if(@$return['error_response'] && $return['error_response']['code'] == '27'){
        
            if($this->refreshAccessToken()){
                return $this->perform($operation);
            }
            
        }

        return $return;
    }

    protected function refreshAccessToken()
    {
        $uri = $this->requestAuthScheme;
        $data = array(
                'grant_type'    =>  'refresh_token',
                'client_id'     =>  $this->config->getApiKey(),
                'client_secret' =>  $this->config->getApiSecret(),
                'refresh_token' =>  $this->config->getRefreshToken()
            );  
        $return = $this->curlExec($uri, $data);
        if($return['error_description'] == 'refresh token expired'){
            throw new \Exception('refresh token expired');
        }

        $this->config->setAccessToken($return['access_token']);

        return true;
    }

    protected function curlExec($uri,$data){
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('POST', $uri, ['form_params' => $data]);
            return json_decode($res->getBody()->getContents(),true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return json_decode($e->getResponse()->getBody(),true);
        }

    }

    protected function authSignature( $operation ){
        $code_arr = $operation->getOperationParameter();

        $code_arr['app_key'] = $this->config->getApiKey();
        $code_arr['session'] = $this->config->getAccessToken();
        $code_arr['timestamp'] = date('Y-m-d H:m:s');
        $code_arr['v'] = '2.0';
        $code_arr['sign_method'] = 'md5';
        $code_arr['format'] = 'json';
        $code_arr['method'] = $operation->getName();

        ksort($code_arr);
        $sign_str = '';
        foreach ($code_arr as $key=>$val){
            if(!$val) continue;
            $sign_str .= $key . $val;
        }
        
        $sign_str =  $this->config->getApiSecret().$sign_str.$this->config->getApiSecret();

        $code_arr['sign'] = strtoupper(md5($sign_str));

        return $code_arr;
    }    
}