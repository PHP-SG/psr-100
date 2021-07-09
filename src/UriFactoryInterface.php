<?php

declare(strict_types=1);

namespace Psg\Http\Message;

interface UriFactoryInterface extends \Psr\Http\Message\UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @throws \InvalidArgumentException if the given URI cannot be parsed
     */
    public function createUri(string $uri = ''): UriInterface;
}
