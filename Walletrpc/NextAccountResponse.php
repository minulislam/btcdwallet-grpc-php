<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.NextAccountResponse</code>.
 */
class NextAccountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>.
     */
    private $account_number = 0;

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
}
