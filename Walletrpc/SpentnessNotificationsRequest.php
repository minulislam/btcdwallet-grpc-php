<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.SpentnessNotificationsRequest</code>
 */
class SpentnessNotificationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>
     */
    private $account = 0;
    /**
     * Generated from protobuf field <code>bool no_notify_unspent = 2;</code>
     */
    private $no_notify_unspent = false;
    /**
     * Generated from protobuf field <code>bool no_notify_spent = 3;</code>
     */
    private $no_notify_spent = false;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>
     * @return int
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkUint32($var);
        $this->account = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool no_notify_unspent = 2;</code>
     * @return bool
     */
    public function getNoNotifyUnspent()
    {
        return $this->no_notify_unspent;
    }

    /**
     * Generated from protobuf field <code>bool no_notify_unspent = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoNotifyUnspent($var)
    {
        GPBUtil::checkBool($var);
        $this->no_notify_unspent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool no_notify_spent = 3;</code>
     * @return bool
     */
    public function getNoNotifySpent()
    {
        return $this->no_notify_spent;
    }

    /**
     * Generated from protobuf field <code>bool no_notify_spent = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoNotifySpent($var)
    {
        GPBUtil::checkBool($var);
        $this->no_notify_spent = $var;

        return $this;
    }

}

