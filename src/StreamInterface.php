<?php

declare(strict_types=1);

namespace Psg\Http\Message;

/** Adds factory methods */
interface StreamInterface extends \Psr\Http\Message\StreamInterface, StreamFactoryInterface
{
    /**
     * Create a new stream from a string.
     *
     * The stream SHOULD be created with a temporary resource.
     *
     * @param string $content string content with which to populate the stream
     */
    public function create(string $content = ''): self;

    /**
     * Create a stream from an existing file.
     *
     * The file MUST be opened using the given mode, which may be any mode
     * supported by the `fopen` function.
     *
     * The `$filename` MAY be any string supported by `fopen()`.
     *
     * @param string $filename filename or stream URI to use as basis of stream
     * @param string $mode mode with which to open the underlying filename/stream
     *
     * @throws \RuntimeException if the file cannot be opened
     * @throws \InvalidArgumentException if the mode is invalid
     */
    public function createFromFile(string $filename, string $mode = 'r'): self;

    /**
     * Create a new stream from an existing resource.
     *
     * The stream MUST be readable and may be writable.
     *
     * @param resource $resource PHP resource to use as basis of stream
     */
    public function createFromResource($resource): self;
}
