<?php

namespace AlibabaApi\Operations;

class SearchRankGet extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.diagnostic.search.rank.get';
    }

    public function setKeyword($keyword)
    {
        $this->parameter['keyword'] = $keyword;
        return $this;
    }


}