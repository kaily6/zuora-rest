<?php

namespace Zuora\Object;


class CreateAccountResponse extends Object
{
    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @return mixed
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return mixed
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionNumber()
    {
        return $this->subscriptionNumber;
    }

    /**
     * @return mixed
     */
    public function getContractedMrr()
    {
        return $this->contractedMrr;
    }

    /**
     * @return mixed
     */
    public function getTotalContractedValue()
    {
        return $this->totalContractedValue;
    }

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return mixed
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    protected $paymentId;
    protected $paidAmount;
}
