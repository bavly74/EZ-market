<?php

namespace App\Http\services;
use http\Env\Request;
use GuzzleHttp\Client;
//use http\Client;
class fatoorahservices
{
    private $base_url;
    private $headers;
    private $request_client;
public function __construct(Client $request_client ){
    $this->request_client=$request_client;
    $this->base_url=env('fatoora_base_url');
    $this->headers= [
      'Content-Type'=>'application/jason',
      'authorization'=>'bearer'.env('fatoorah_token')
    ];

}
private function buildrequest($url,$method,$data=[]){
    $request=new Request($method,$this->base_url.$url,$this->headers);
    if (!$data) return false;
    $response=$this->request_client->send($request,['jason'=>$data]);
    if ($response->getStatusCode()  !=200){
        return false;
    }
    $response-json_decode($response->getBody(),true);
    return $response;
}

public function sendPayment($data){
    $requestData=$this->parsePaymentDate();
    $response=$this->buildrequest('v2/SendPayment','post',$requestData);
if($response){
    $this->saveTransactionPayment($patient_id,$response['Data']['InvoiceId']);
}
return $response;
}}
