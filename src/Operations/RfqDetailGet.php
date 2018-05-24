<?php

namespace AlibabaApi\Operations;

class RfqDetailGet extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.rfqdetail.get';
    }

    public function setRfqQueryDto(string $rfqQueryDto)
    {
        $this->parameter['rfq_query_dto'] = $rfqQueryDto;
        return $this;
    }
}