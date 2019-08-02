<?php

namespace Qjd\DingTalk;

class DingTalk
{
	private $url = '';
	
	public function __construct($access_token = '')
	{
		$this->url = 'https://oapi.dingtalk.com/robot/send?access_token='.$access_token;
	}

	public function send($msg = '')
	{
        $data = ['msgtype'=>'text','text'=>['content'=>$msg]];
        $post_string = json_encode($data);
        $url = $this->url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json;charset=utf-8']);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
	}
}