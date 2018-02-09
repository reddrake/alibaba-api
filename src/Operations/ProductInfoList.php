<?php

namespace AlibabaApi\Operations;

class ProductInfoList extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.product.list';
    }

    public function setSubject($subject)
    {
        $this->parameter['subject'] = $subject;
        return $this;
    }

    public function setCategoryId($categoryId){
        $this->parameter['category_id'] = $categoryId;
        return $this;
    }
    public function setPageSize($pageSize)
    {
        $this->parameter['page_size'] = $pageSize;
        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->parameter['current_page'] = $currentPage;
        return $this;
    }

    public function setLanguage($language = 'ENGLISH')
    {
        $this->parameter['language'] = $language;
        return $this;
    }
}