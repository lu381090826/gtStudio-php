<?php
/**
 * Created by IntelliJ IDEA.
 * User: gavinlu
 * Date: 2019/7/10
 * Time: 19:01
 */
namespace app\common\behavior;

use think\Response;

class CronRun
{
    public function run(&$dispatch){
        $host_name = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : "*";
        $headers = [
            "Access-Control-Allow-Origin" => $host_name,
            "Access-Control-Allow-Credentials" => 'true',
            "Access-Control-Allow-Headers" => "x-token,x-uid,x-token-check,x-requested-with,content-type,Host"
        ];
        if($dispatch instanceof Response) {
            $dispatch->header($headers);
        } else if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            $dispatch['type'] = 'response';
            $response = new Response('', 200, $headers);
            $dispatch['response'] = $response;
        }
    }
}