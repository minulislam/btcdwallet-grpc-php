<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.ChangePassphraseRequest</code>.
 */
class ChangePassphraseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.walletrpc.ChangePassphraseRequest.Key key = 1;</code>.
     */
    private $key = 0;
    /**
     * Generated from protobuf field <code>bytes old_passphrase = 2;</code>.
     */
    private $old_passphrase = '';
    /**
     * Generated from protobuf field <code>bytes new_passphrase = 3;</code>.
     */
    private $new_passphrase = '';

    public function __construct()
    {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.walletrpc.ChangePassphraseRequest.Key key = 1;</code>.
     *
     * @return int
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>.walletrpc.ChangePassphraseRequest.Key key = 1;</code>.
     *
     * @param int $var
     *
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkEnum($var, \Walletrpc\ChangePassphraseRequest_Key::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes old_passphrase = 2;</code>.
     *
     * @return string
     */
    public function getOldPassphrase()
    {
        return $this->old_passphrase;
    }

    /**
     * Generated from protobuf field <code>bytes old_passphrase = 2;</code>.
     *
     * @param string $var
     *
     * @return $this
     */
    public function setOldPassphrase($var)
    {
        GPBUtil::checkString($var, false);
        $this->old_passphrase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes new_passphrase = 3;</code>.
     *
     * @return string
     */
    public function getNewPassphrase()
    {
        return $this->new_passphrase;
    }

    /**
     * Generated from protobuf field <code>bytes new_passphrase = 3;</code>.
     *
     * @param string $var
     *
     * @return $this
     */
    public function setNewPassphrase($var)
    {
        GPBUtil::checkString($var, false);
        $this->new_passphrase = $var;

        return $this;
    }
}
