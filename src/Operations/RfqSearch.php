<?php

namespace AlibabaApi\Operations;

class RfqSearch extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.rfq.search';
    }

    public function setCond(string $cond)
    {
        $this->parameter['cond'] = $cond;
        return $this;
    }
}