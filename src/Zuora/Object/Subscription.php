<?php

namespace Zuora\Object;


class Subscription extends Object {

    protected $accountId;
    protected $accountName;
    protected $accountNumber;
    protected $autoRenew;
    protected $contractEffectiveDate;
    protected $contractedMrr;
    protected $id;
    protected $initialTerm;
    protected $notes;
    protected $renewalTerm;
    protected $status;
    protected $subscriptionNumber;
    protected $subscriptionStartDate;
    protected $success;
    protected $termEndDate;
    protected $termStartDate;
    protected $termType;
    protected $totalContractedValue;

    /**
     * @param mixed $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * @param mixed $accountName
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * @param mixed $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @param mixed $autoRenew
     */
    public function setAutoRenew($autoRenew)
    {
        $this->autoRenew = $autoRenew;
    }

    /**
     * @param mixed $contractEffectiveDate
     */
    public function setContractEffectiveDate($contractEffectiveDate)
    {
        $this->contractEffectiveDate = $contractEffectiveDate;
    }

    /**
     * @param mixed $contractedMrr
     */
    public function setContractedMrr($contractedMrr)
    {
        $this->contractedMrr = $contractedMrr;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $initialTerm
     */
    public function setInitialTerm($initialTerm)
    {
        $this->initialTerm = $initialTerm;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @param mixed $renewalTerm
     */
    public function setRenewalTerm($renewalTerm)
    {
        $this->renewalTerm = $renewalTerm;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $subscriptionNumber
     */
    public function setSubscriptionNumber($subscriptionNumber)
    {
        $this->subscriptionNumber = $subscriptionNumber;
    }

    /**
     * @param mixed $subscriptionStartDate
     */
    public function setSubscriptionStartDate($subscriptionStartDate)
    {
        $this->subscriptionStartDate = $subscriptionStartDate;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @param mixed $termEndDate
     */
    public function setTermEndDate($termEndDate)
    {
        $this->termEndDate = $termEndDate;
    }

    /**
     * @param mixed $termStartDate
     */
    public function setTermStartDate($termStartDate)
    {
        $this->termStartDate = $termStartDate;
    }

    /**
     * @param mixed $termType
     */
    public function setTermType($termType)
    {
        $this->termType = $termType;
    }

    /**
     * @param mixed $totalContractedValue
     */
    public function setTotalContractedValue($totalContractedValue)
    {
        $this->totalContractedValue = $totalContractedValue;
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
    public function getAccountName()
    {
        return $this->accountName;
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
    public function getAutoRenew()
    {
        return $this->autoRenew;
    }

    /**
     * @return mixed
     */
    public function getContractEffectiveDate()
    {
        return $this->contractEffectiveDate;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getInitialTerm()
    {
        return $this->initialTerm;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Subscription rate plans
     *
     * @return \Zuora\Object\SubscriptionRatePlan[]
     */
    public function getRatePlans()
    {
        return $this->map('ratePlans', '\Zuora\Object\SubscriptionRatePlan');
    }

    /**
     * @return mixed
     */
    public function getRenewalTerm()
    {
        return $this->renewalTerm;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
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
    public function getSubscriptionStartDate()
    {
        return $this->subscriptionStartDate;
    }

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
    public function getTermEndDate()
    {
        return $this->termEndDate;
    }

    /**
     * @return mixed
     */
    public function getTermStartDate()
    {
        return $this->termStartDate;
    }

    /**
     * @return mixed
     */
    public function getTermType()
    {
        return $this->termType;
    }

    /**
     * @return mixed
     */
    public function getTotalContractedValue()
    {
        return $this->totalContractedValue;
    }
} 
