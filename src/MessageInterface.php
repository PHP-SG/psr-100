<?php

declare(strict_types=1);

namespace Psg\Http\Message;

/** Adds factory method */
interface MessageInterface
{
    /** return the body stream as a string */
    public function getBodyString(): string;

    /** set the body stream using a string */
    public function withBodyString(string $body): self;
}
