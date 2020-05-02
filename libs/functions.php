<?php

//Main Functions
class main_functions{

    //Bot API Url
    private $bot_url = "https://api.telegram.org/bot1132202647:AAF2kzJ576qo7yOYLLwqlkCyFwMAzVche6o";

    //cURL Method
    private function response($url,$post_fields){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$post_fields);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    //sendMessage Method
    private function sendMessage($chat_id,$message){
        $url = $this->bot_url . "/sendMessage";
        $post_fields = [
            "chat_id" => $chat_id,
            "text" => $message
        ];
        return $this->response($url,$post_fields);
    }

}

?>