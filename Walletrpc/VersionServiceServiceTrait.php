<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: api.proto

namespace Walletrpc;

trait VersionServiceServiceTrait
{
    final public function getMethods()
    {
        return [
            '/walletrpc.VersionService/Version' => 'doVersion',
        ];
    }

    final public function getLastErrno()
    {
        throw new \RuntimeException(__METHOD__.' can only called in client');
    }

    final public function getLastError()
    {
        throw new \RuntimeException(__METHOD__.' can only called in client');
    }

    final public function doVersion(\Lv\Grpc\Session $session, $data)
    {
        $request = new \Walletrpc\VersionRequest();

        if ($session->getMetadata('content-type') === 'application/grpc+proto') {
            $request->mergeFromString($data);
        } else {
            $request->mergeFromJsonString($data);
        }

        $request->context($session);

        return $this->Version($request);
    }
}
