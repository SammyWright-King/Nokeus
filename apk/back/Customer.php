<?php
include "Connect.php";
include "Session.php";

class Customer{
    public $connect;
    function __construct(){
        $connect = new Connect();
        $this->connect = $connect;
    }

    function getCustomer(){
        $customer = $this->connect->getRequest("/auth",NULL, $_SESSION['x-token']);
        return json_decode($customer);
    }

    function getAgent($id){
        $form = ['id' => $id];
        $customers = $this->connect->getRequest("/customers",$form, $_SESSION['x-token']);
        $customers = json_decode($customers);
        $customers = $customers->data;

        return $customers[0];
    }

    function getRates(){
        $rates = $this->connect->getRequest("/rates", NULL, $_SESSION['x-token']);
        $rates = json_decode($rates);
        return $rates->data;
    }

    function getTransactions(){
        $trans = $this->connect->getRequest('/transactions', NULL, $_SESSION['x-token']);
        $transactions = json_decode($trans);
        $trans = [];
        if(isset($transactions->data)){
            $trans = $transactions->data;
        }
        return $trans;
    }

    function getBitcoinRate(){
        $btc = $this->connect->accessURL('https://api.coinbase.com/v2/prices/BTC-USD/buy');
        $btc = json_decode($btc);
        return $btc->data->amount;
    }

    function getEthereumRate(){
        $eth = $this->connect->accessURL('https://api.coinbase.com/v2/prices/ETH-USD/buy');
        $eth = json_decode($eth);
        return $eth->data->amount;
    }
}





