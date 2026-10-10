<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFGeocentricTranslationRGNC9193RGNC15Provider implements GridProvider
{
    public function provideGrid(): IGNFGeocentricTranslationGrid
    {
        return new IGNFGeocentricTranslationGrid(__DIR__ . '/../../resources/gr3dncI08.tac');
    }
}
