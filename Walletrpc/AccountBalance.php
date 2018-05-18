<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.AccountBalance</code>.
 */
class AccountBalance extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>.
     */
    private $account = 0;
    /**
     * Generated from protobuf field <code>int64 total_balance = 2;</code>.
     */
    private $total_balance = 0;

    public function __construct()
    {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>.
     *
     * @return int
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkUint32($var);
        $this->account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_balance = 2;</code>.
     *
     * @return int|string
     */
    public function getTotalBalance()
    {
        return $this->total_balance;
    }

    /**
     * Generated from protobuf field <code>int64 total_balance = 2;</code>.
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
}
