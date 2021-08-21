<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXNapier1962NZVD2016Provider implements GridProvider
{
    private GTXGrid $cache;

    public function provideGrid(): GTXGrid
    {
        return $this->cache ??= new GTXGrid(__DIR__ . '/../../resources/napiht1962-nzvd2016.gtx');
    }
}
