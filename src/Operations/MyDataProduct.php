<?php

namespace AlibabaApi\Operations;

class MyDataProduct extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.mydata.self.product.get';
    }

    public function setStatisticsType(string $statisticsType)
    {
        $this->parameter['statistics_type'] = $statisticsType;

        return $this;
    }

    public function setStatDate(string $statDate)
    {
        $this->parameter['stat_date'] = $statDate;

        return $this;
    }

    public function setProductIds(array $productIds)
    {
        $this->parameter['product_ids'] = $productIds;

        return $this;
    }
}