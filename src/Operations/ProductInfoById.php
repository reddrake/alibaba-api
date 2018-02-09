<?php

namespace AlibabaApi\Operations;

class ProductInfoById extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.product.get';
    }

    public function setProductId($productId)
    {
        $this->parameter['product_id'] = $productId;
        return $this;
    }

    public function setLanguage($language = 'ENGLISH')
    {
        $this->parameter['language'] = $language;
        return $this;
    }
}