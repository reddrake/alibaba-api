<?php

namespace AlibabaApi\Operations;

class VasSubscribeGet extends AbstractOperation
{
    public function getName()
    {
        return 'taobao.vas.subscribe.get';
    }

    public function setArticleCode($article_code)
    {
        $this->parameter['article_code'] = $article_code;
        return $this;
    }

    public function setNick($nick)
    {
        $this->parameter['nick'] = $nick;
        return $this;
    }
}