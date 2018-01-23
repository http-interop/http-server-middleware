HTTP Server Middleware
======================

# Deprecation warning!

**Starting January 22nd, 2018 http-interop is officially deprecated in favor of
[PSR-15][psr-15].**

From v1.1, this package directly extends PSR-15 interfaces to provide backwards
compatibility and should no longer be added to new projects.

Please switch to `psr/http-server-middleware` as soon as possible.

[psr-15]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-15-request-handlers.md

## Changes Required

There are two changes required to use the official `psr/http-server-middleware` package:

### Update Composer

Replace the line in `composer.json` that reads:

```json
{
    "require": {
        "http-interop/http-server-middleware": "^1.0"
    }
}
```

with:

```json
{
    "require": {
        "psr/http-server-middleware": "^1.0"
    }
}
```

### Update Code

Replace any references to:

```php
use Interop\Http\Server\MiddlewareInterface;
```

with:

```php
use Psr\Http\Server\MiddlewareInterface;`
```
