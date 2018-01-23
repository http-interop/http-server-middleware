<?php

namespace Interop\Http\Server;

use Psr\Http\Server\MiddlewareInterface as PsrInterface;

/**
 * An HTTP middleware component participates in processing an HTTP message,
 * either by acting on the request or the response. This interface defines the
 * methods required to use the middleware.
 */
interface MiddlewareInterface extends PsrInterface
{
}
