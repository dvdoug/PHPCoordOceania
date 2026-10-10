<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFXyzVelocityRGNC15Provider implements GridProvider
{
    public function provideGrid(): IGNFXyzVelocityGrid
    {
        return new IGNFXyzVelocityGrid(__DIR__ . '/../../resources/grmmncI08.tac');
    }
}
