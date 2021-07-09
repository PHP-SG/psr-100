<?php

declare(strict_types=1);

namespace Psg\Http\Message;

/**
 * Adds factory methods to Psr RequestInterface.
 */
interface RequestInterface extends \Psr\Http\Message\RequestInterface, RequestFactoryInterface
{
    /**
     * Create a new request.
     *
     * @param string $method the HTTP method associated with the request
     * @param UriInterface|string $uri The URI associated with the request. If
     *                                 the value is a string, the factory MUST create a UriInterface
     *                                 instance based on it.
     */
    public function create(string $method, $uri): self;
}
