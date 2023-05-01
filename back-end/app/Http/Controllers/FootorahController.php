<?php

namespace App\Http\Controllers;

use App\Http\services\fatoorahservices;
use Illuminate\Http\Request;

class FootorahController extends Controller
{
    private $fatoorahservices;
    public function __construct(fatoorahservices $fatoorahservices){
        $this-> fatoorahservices=$fatoorahservices;}

    public function payOrder(){
        $data=[
        "NotificationOption" => "Lnk",
        "InvoiceValue"       => '50',
         "CustomerName"      => '',
            "Language"           => 'en',
        //Fill optional data
        //'DisplayCurrencyIso' => 'KWD',
        //'MobileCountryCode'  => '+965',
        //'CustomerMobile'     => '1234567890',
       "CustomerEmail"    => 'abram_55fayez@gmail.com',
        "CallBackUrl"      => env('sucess_url'),
        "ErrorUrl"     => env('error_url'),
  ] ;
       $this->fatoorahservices->sendPayment($data);
    }

}
