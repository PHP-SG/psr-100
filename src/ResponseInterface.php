<?php

declare(strict_types=1);

namespace Psg\Http\Message;

/** Adds factory method */
interface ResponseInterface extends \Psr\Http\Message\ResponseInterface, ResponseFactoryInterface
{
    /**
     * Create a new response.
     *
     * @param int $code HTTP status code; defaults to 200
     * @param string $reasonPhrase reason phrase to associate with status code
     *                             in generated response; if none is provided implementations MAY use
     *                             the defaults as suggested in the HTTP specification
     */
    public function create(int $code = 200, string $reasonPhrase = ''): self;
}
