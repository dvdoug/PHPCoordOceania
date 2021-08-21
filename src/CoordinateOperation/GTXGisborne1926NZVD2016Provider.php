<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXGisborne1926NZVD2016Provider implements GridProvider
{
    private GTXGrid $cache;

    public function provideGrid(): GTXGrid
    {
        return $this->cache ??= new GTXGrid(__DIR__ . '/../../resources/gisbht1926-nzvd2016.gtx');
    }
}
