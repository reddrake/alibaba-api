<?php

namespace AlibabaApi\Operations;

class ProductIdDecrypt extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.product.id.decrypt';
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