<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.AccountsResponse.Account</code>.
 */
class AccountsResponse_Account extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>.
     */
    private $account_number = 0;
    /**
     * Generated from protobuf field <code>string account_name = 2;</code>.
     */
    private $account_name = '';
    /**
     * Generated from protobuf field <code>int64 total_balance = 3;</code>.
     */
    private $total_balance = 0;
    /**
     * Generated from protobuf field <code>uint32 external_key_count = 4;</code>.
     */
    private $external_key_count = 0;
    /**
     * Generated from protobuf field <code>uint32 internal_key_count = 5;</code>.
     */
    private $internal_key_count = 0;
    /**
     * Generated from protobuf field <code>uint32 imported_key_count = 6;</code>.
     */
    private $imported_key_count = 0;

    public function __construct()
    {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>.
     *
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setAccountNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->account_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_name = 2;</code>.
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Generated from protobuf field <code>string account_name = 2;</code>.
     *
     * @param string $var
     *
     * @return $this
     */
    public function setAccountName($var)
    {
        GPBUtil::checkString($var, true);
        $this->account_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_balance = 3;</code>.
     *
     * @return int|string
     */
    public function getTotalBalance()
    {
        return $this->total_balance;
    }

    /**
     * Generated from protobuf field <code>int64 total_balance = 3;</code>.
     *
     * @param int|string $var
     *
     * @return $this
     */
    public function setTotalBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 external_key_count = 4;</code>.
     *
     * @return int
     */
    public function getExternalKeyCount()
    {
        return $this->external_key_count;
    }

    /**
     * Generated from protobuf field <code>uint32 external_key_count = 4;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setExternalKeyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->external_key_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 internal_key_count = 5;</code>.
     *
     * @return int
     */
    public function getInternalKeyCount()
    {
        return $this->internal_key_count;
    }

    /**
     * Generated from protobuf field <code>uint32 internal_key_count = 5;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setInternalKeyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->internal_key_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 imported_key_count = 6;</code>.
     *
     * @return int
     */
    public function getImportedKeyCount()
    {
        return $this->imported_key_count;
    }

    /**
     * Generated from protobuf field <code>uint32 imported_key_count = 6;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setImportedKeyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->imported_key_count = $var;

        return $this;
    }
}
