<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.NetworkResponse</code>.
 */
class NetworkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 active_network = 1;</code>.
     */
    private $active_network = 0;

    public function __construct()
    {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 active_network = 1;</code>.
     *
     * @return int
     */
    public function getActiveNetwork()
    {
        return $this->active_network;
    }

    /**
     * Generated from protobuf field <code>uint32 active_network = 1;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setActiveNetwork($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_network = $var;

        return $this;
    }
}
