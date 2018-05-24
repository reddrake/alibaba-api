<?php

namespace AlibabaApi\Operations;

class RfqDetailGet extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.rfqdetail.get';
    }

    public function setSupplierLoginId(string $supplierLoginId)
    {
        $this->parameter['rfq_query_dto']['supplier_login_id'] = $supplierLoginId;
        return $this;
    }

    public function setRfqId(string $rfqId)
    {
        $this->parameter['rfq_query_dto']['rfq_id'] = $rfqId;
        return $this;
    }


}