<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.GetTransactionsResponse</code>.
 */
class GetTransactionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .walletrpc.BlockDetails mined_transactions = 1;</code>.
     */
    private $mined_transactions;
    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails unmined_transactions = 2;</code>.
     */
    private $unmined_transactions;

    public function __construct()
    {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.BlockDetails mined_transactions = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMinedTransactions()
    {
        return $this->mined_transactions;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.BlockDetails mined_transactions = 1;</code>.
     *
     * @param \Walletrpc\BlockDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     *
     * @return $this
     */
    public function setMinedTransactions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\BlockDetails::class);
        $this->mined_transactions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails unmined_transactions = 2;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnminedTransactions()
    {
        return $this->unmined_transactions;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails unmined_transactions = 2;</code>.
     *
     * @param \Walletrpc\TransactionDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     *
     * @return $this
     */
    public function setUnminedTransactions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\TransactionDetails::class);
        $this->unmined_transactions = $arr;

        return $this;
    }
}
