<?php

namespace AlibabaApi\Operations;

class QuotationPost extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.quotation.post';
    }

    public function setDto(string $dto)
    {
        $this->parameter['dto'] = $dto;
        return $this;
    }
}