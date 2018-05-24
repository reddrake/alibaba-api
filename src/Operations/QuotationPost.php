<?php

namespace AlibabaApi\Operations;

class QuotationPost extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.quotation.post';
    }

    public function setAnnexNames(string $annexNames)
    {
        $this->parameter['dto']['annex_names'] = $annexNames;
        return $this;
    }

    public function setSupplierAccountId(string $supplierAccountId)
    {
        $this->parameter['dto']['supplier_account_id'] =$supplierAccountId;
        return $this;
    }

    public function setDetails(string $details)
    {
        $this->parameter['dto']['details'] = $details;
        return $this;
    }

    public function setAnnexFilesStr(string $annexFilesStr)
    {
        $this->parameter['dto']['annex_files_str'] = $annexFilesStr;
        return $this;
    }

    public function setEvalutation(string $evalutation)
    {
        $this->parameter['dto']['evalutation'] = $evalutation;
        return $this;
    }

    public function setDeliveryTime(string $deliveryTime)
    {
        $this->parameter['dto']['delivery_time'] = $deliveryTime;
        return $this;
    }

    public function setSupplierMemberId(string $supplierMemberId)
    {
        $this->parameter['dto']['supplier_member_id'] = $supplierMemberId;
        return $this;
    }

    public function setSupplierCompanyId(string $supplierCompanyId)
    {
        $this->parameter['dto']['supplier_company_id'] = $supplierCompanyId;
        return $this;
    }

    public function setPaymentTerms(string $paymentTerms)
    {
        $this->parameter['dto']['payment_terms'] = $paymentTerms;
        return $this;
    }

    public function setRfqId(string $rfqId)
    {
        $this->parameter['dto']['rfq_id'] = $rfqId;
        return $this;
    }

    public function setBrief(string $brief)
    {
        $this->parameter['dto']['brief'] = $brief;
        return $this;
    }




}