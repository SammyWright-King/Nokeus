<?php
include "Connector.php";
include "Session.php";

class Admin{
    public $connect=NULL;

    function __construct(){
        $connect = new Connector();
        $this->connect = $connect;
    }

    function getCustomer(){
        $customer = $this->connect->getRequest("/auth",NULL, $_SESSION['x-admin-token']);
        return json_decode($customer);
    }

    function getTransactions(){
        $trans = $this->connect->getRequest("/transactions",NULL, $_SESSION['x-admin-token']);
        $transaction = json_decode($trans);
        return $transaction->data;
    }

    function getCustomers(){
        $customers = $this->connect->getRequest("/customers",NULL, $_SESSION['x-admin-token']);
        $customers = json_decode($customers);
        return $customers->data;
    }

    function getAgent($id){
        $form = ['id' => $id];
        $agents = $this->connect->getRequest("/customers", $form, $_SESSION['x-admin-token']);
        $agents = json_decode($agents);
        return $agents->data[0];
    }

    function getRates(){
        $rates = $this->connect->getRequest("/rates",NULL, $_SESSION['x-admin-token']);
        $rates = json_decode($rates);
        return $rates->data;
    }

    function filterCustomerByAgent($customer){
        $matches = [];

        foreach ($customer as $c){
            if(in_array("agent", $c->roles)){
                $matches[] = $c;
            }
        }
        return $matches;
    }
}


//$connect = new Connector();
//
//$customer = $connect->getRequest("/auth",NULL, $_SESSION['x-token']);
//$customer =json_decode($customer);
//$customer = $customer->data;
//
//$params = [
//    "id"=> $customer->_id,
//    "agentId" => $customer->_id
//];
//$rates = $connect->getRequest("/rates/filter", $params, $_SESSION['x-token']);
//$rates = json_decode($rates);
//
//$customers = $connect->getRequest('/customers', NULL, $_SESSION['x-token']);
//$customers = json_decode($customers);
//$customers = $customers->data;

