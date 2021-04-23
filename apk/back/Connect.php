<?php

class Connect{
    public $baseUrl = "https://nokuex-crypto-api.herokuapp.com/api";

    /**
     * @param $url
     * make request to endpoint
     */
    public function makeRequest($url, $method, $token=NULL, $arr=NULL){
        $url = $this->baseUrl. $url;

        if(isset($arr)){
            //$fields=$arr;
            $postRequest = http_build_query($arr);
        }else{
            $postRequest = NULL;
        }

        $cURLConnection = curl_init();

        if($method == "GET"){
            //add param to url
            $url = $url."?".$postRequest;

            curl_setopt($cURLConnection, CURLOPT_URL, $url);
            curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($cURLConnection, CURLOPT_FOLLOWLOCATION, TRUE);
        }
        else if($method == "POST"){
            curl_setopt($cURLConnection, CURLOPT_URL, $url);
            curl_setopt($cURLConnection, CURLOPT_POST, true);
            curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
            curl_setopt($cURLConnection, CURLOPT_CUSTOMREQUEST, $method);
        }
        else if($method == "PUT"){

            curl_setopt($cURLConnection, CURLOPT_URL, $url);
            curl_setopt($cURLConnection, CURLOPT_POST, true);
            curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
            curl_setopt($cURLConnection, CURLOPT_CUSTOMREQUEST, $method);
        }

        if(isset($token)){
            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "x-access-token: ". $token,
            ));
        }

        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($cURLConnection);

        curl_close($cURLConnection);

        return $result;

    }

    /**
     * @param $url
     * @param null $param
     * @param null $token
     * @return bool|string
     * get request with or without param
     */
    public function getRequest($url, $param=NULL, $token=NULL){
        $url = $this->baseUrl.$url;

        if(isset($param)){
            $param = http_build_query($param);
            $url = $url."?".$param;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "x-access-token: ". $token
        ));

        $output=curl_exec($ch);

        curl_close($ch);
        return $output;
    }

    /**
     * @param $url
     * @param null $body
     * @param null $token
     * @return bool|string
     * send post request with body
     */
    public function postRequest($url, $body=NULL, $token=NULL){
        $url = $this->baseUrl. $url;

        $postData = json_encode($body);

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        if(isset($token)){
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "x-access-token: ". $token
            ));
        }else{
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
            ));
        }

        $output=curl_exec($ch);

        curl_close($ch);
        return $output;
    }


}
