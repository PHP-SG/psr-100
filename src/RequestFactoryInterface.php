<?php

declare(strict_types=1);

namespace Psg\Http\Message;

interface RequestFactoryInterface extends \Psr\Http\Message\RequestFactoryInterface
{
    /**
     * Create a new request.
     *
     * @param string $method the HTTP method associated with the request
     * @param UriInterface|string $uri The URI associated with the request. If
     *                                 the value is a string, the factory MUST create a UriInterface
     *                                 instance based on it.
     */
    public function createRequest(string $method, $uri): RequestInterface;
}
