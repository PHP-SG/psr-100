<?php
namespace Psg\Http\Message;

interface UriInterface extends \Psr\Http\Message\UriInterface, UriFactoryInterface{
    /**
     * Create a new URI.
     *
     * @param string $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     */
    public function create(string $uri = ''): UriInterface;
}
