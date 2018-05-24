<?php

namespace AlibabaApi\Operations;

class RfqSearch extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.rfq.search';
    }

    public function setSupplierAccountId(int $id)
    {
        $this->parameter['cond']['supplier_account_id'] = $id;
        return $this;
    }

    public function setSearchText(string $text)
    {
        $this->parameter['cond']['search_text'] = $text;
        return $this;
    }

    public function setPageSize(int $pageSize)
    {
        $this->parameter['cond']['page_size'] = $pageSize;
        return $this;
    }

    public function setOpenTime(int $openTime)
    {
        $this->parameter['cond']['open_time'] = $openTime;
        return $this;
    }

    public function setAttachment(bool $attachment)
    {
        $this->parameter['cond']['attachment'] = $attachment;
        return $this;
    }

    public function setPhoto(bool $photo)
    {
        $this->parameter['cond']['photo'] = $photo;
        return $this;
    }

    public function setCountry(string $country)
    {
        $this->parameter['cond']['country'] = $country;
        return $this;
    }

    public function setCategoryId(string $categoryId)
    {
        $this->parameter['cond']['category_id'] = $categoryId;
        return $this;
    }

    public function setCloseTime(int $closeTime)
    {
        $this->parameter['cond']['close_time'] = $closeTime;
        return $this;
    }

    public function setQuantityMin(int $quantityMin)
    {
        $this->parameter['cond']['quantity_min'] = $quantityMin;
        return $this;
    }

    public function setCurrentPage(int $currentPage)
    {
        $this->parameter['cond']['current_page'] = $currentPage;
        return $this;
    }

    public function setSupplierCompanyId(int $supplierCompanyId)
    {
        $this->parameter['cond']['supplier_company_id'] = $supplierCompanyId;
        return $this;
    }

    public function setQuantityMax($quantityMax)
    {
        $this->parameter['cond']['quantity_max'] = $quantityMax;
        return $this;
    }

}