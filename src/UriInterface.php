<?php

declare(strict_types=1);

namespace Psg\Http\Message;

interface UriInterface extends \Psr\Http\Message\UriInterface, UriFactoryInterface
{
    /**
     * Create a new URI.
     *
     * @throws \InvalidArgumentException if the given URI cannot be parsed
     */
    public function create(string $uri = ''): self;
}
