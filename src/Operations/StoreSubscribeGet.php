<?php

namespace AlibabaApi\Operations;

class StoreSubscribeGet extends AbstractOperation
{
    public function getName()
    {
        return 'taobao.appstore.subscribe.get';
    }

    public function setNick($nick)
    {
        $this->parameter['nick'] = $nick;
        return $this;
    }
}