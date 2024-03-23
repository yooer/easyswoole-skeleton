<?php

namespace EasySwooleLib\Server\Udp;

use Swoole\Server as SwooleServer;

class UdpServer
{
    // 监听数据接收事件
    public static function onPacket(SwooleServer $server, string $data, array $clientInfo)
    {
        echo "[SubServer][Udp][onPacket]Server: Packet.\n";

        var_dump($clientInfo);
        $server->sendto($clientInfo['address'], $clientInfo['port'], "Server：{$data}");
    }
}
