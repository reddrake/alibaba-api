<?php

namespace AlibabaApi\Operations;

class MyDataProductDate extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.mydata.self.product.date.get';
    }

    public function setStatisticsType(string $statisticsType)
    {
        $this->parameter['statistics_type'] = $statisticsType;

        return $this;
    }
}