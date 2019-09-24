<?php
declare(strict_types=1);

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="SayService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class SayService
{
    public function say(string $str): string
    {
        if (empty($str)) {
            return 'hello word!';
        }
        return $str;
    }
}