<?php
declare(strict_types=1);

namespace App\JsonRpc;


use Hyperf\RpcClient\AbstractServiceClient;

class SayService extends AbstractServiceClient
{
    protected $serviceName = 'SayService';

    protected $protocol = 'jsonrpc-http';

    public function say(string $str): string
    {
        return $this->__request(__FUNCTION__, compact('str'));
    }
}