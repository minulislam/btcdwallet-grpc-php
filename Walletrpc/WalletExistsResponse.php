<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.WalletExistsResponse</code>
 */
class WalletExistsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool exists = 1;</code>
     */
    private $exists = false;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool exists = 1;</code>
     * @return bool
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * Generated from protobuf field <code>bool exists = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExists($var)
    {
        GPBUtil::checkBool($var);
        $this->exists = $var;

        return $this;
    }

}
