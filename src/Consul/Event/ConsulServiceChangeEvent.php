<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/26
 * Time: 15:42
 */

namespace GoSwoole\Plugins\Consul\Event;


use GoSwoole\BaseServer\Plugins\Event\Event;
use GoSwoole\Plugins\Consul\Beans\ConsulServiceListInfo;

class ConsulServiceChangeEvent extends Event
{
    const ConsulServiceChangeEvent = "ConsulServiceChangeEvent";

    public function __construct(ConsulServiceListInfo $consulServiceListInfo)
    {
        parent::__construct(self::ConsulServiceChangeEvent, $consulServiceListInfo);
    }

    /**
     * @return ConsulServiceListInfo
     */
    public function getConsulServiceListInfo(): ConsulServiceListInfo
    {
        return $this->getData();
    }
}