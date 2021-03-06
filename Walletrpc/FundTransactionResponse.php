<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.FundTransactionResponse</code>.
 */
class FundTransactionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .walletrpc.FundTransactionResponse.PreviousOutput selected_outputs = 1;</code>.
     */
    private $selected_outputs;
    /**
     * Generated from protobuf field <code>int64 total_amount = 2;</code>.
     */
    private $total_amount = 0;
    /**
     * Generated from protobuf field <code>bytes change_pk_script = 3;</code>.
     */
    private $change_pk_script = '';

    public function __construct()
    {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.FundTransactionResponse.PreviousOutput selected_outputs = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedOutputs()
    {
        return $this->selected_outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.FundTransactionResponse.PreviousOutput selected_outputs = 1;</code>.
     *
     * @param \Walletrpc\FundTransactionResponse_PreviousOutput[]|\Google\Protobuf\Internal\RepeatedField $var
     *
     * @return $this
     */
    public function setSelectedOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\FundTransactionResponse_PreviousOutput::class);
        $this->selected_outputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_amount = 2;</code>.
     *
     * @return int|string
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * Generated from protobuf field <code>int64 total_amount = 2;</code>.
     *
     * @param int|string $var
     *
     * @return $this
     */
    public function setTotalAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes change_pk_script = 3;</code>.
     *
     * @return string
     */
    public function getChangePkScript()
    {
        return $this->change_pk_script;
    }

    /**
     * Generated from protobuf field <code>bytes change_pk_script = 3;</code>.
     *
     * @param string $var
     *
     * @return $this
     */
    public function setChangePkScript($var)
    {
        GPBUtil::checkString($var, false);
        $this->change_pk_script = $var;

        return $this;
    }
}
