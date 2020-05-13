<?php

namespace Amp;

/**
 * A stream is an asynchronous set of ordered values.
 *
 * @template-covariant TValue
 */
interface Stream
{
    /**
     * Succeeds with a tuple of the yielded value and key or null if the stream has completed. If the stream fails,
     * the returned promise will fail with the same exception.
     *
     * @return Promise<array>
     *
     * @throws \Throwable The exception used to fail the stream.
     */
    public function continue(): Promise;
}
