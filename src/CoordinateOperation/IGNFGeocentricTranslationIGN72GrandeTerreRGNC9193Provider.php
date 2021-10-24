<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFGeocentricTranslationIGN72GrandeTerreRGNC9193Provider implements GridProvider
{
    public function provideGrid(): IGNFGeocentricTranslationGrid
    {
        return new IGNFGeocentricTranslationGrid(__DIR__ . '/../../resources/gr3dnc01b.mnt');
    }
}
