<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFGeocentricTranslationNEA74NoumeaRGNC9193Provider implements GridProvider
{
    private IGNFGeocentricTranslationGrid $cache;

    public function provideGrid(): IGNFGeocentricTranslationGrid
    {
        return $this->cache ??= new IGNFGeocentricTranslationGrid(__DIR__ . '/../../resources/gr3dnc03a.mnt');
    }
}
