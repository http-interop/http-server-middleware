<?php

use Interop\Http\Server\RequestHandlerInterface;
use Psr\Http\Server\RequestHandlerInterface as PsrRequestHandlerInterface;

class_alias(PsrRequestHandlerInterface::class, RequestHandlerInterface::class);
