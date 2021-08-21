<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXNZGeoid2016Provider implements GridProvider
{
    private GTXGrid $cache;

    public function provideGrid(): GTXGrid
    {
        return $this->cache ??= new GTXGrid(__DIR__ . '/../../resources/nzgeoid2016.gtx');
    }
}
