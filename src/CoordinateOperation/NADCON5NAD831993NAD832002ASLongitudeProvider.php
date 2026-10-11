<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5NAD831993NAD832002ASLongitudeProvider implements GridProvider
{
    public function provideGrid(): NADCON5Grid
    {
        return new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.nad83_1993.nad83_2002.as.lon.trn.20160901.b');
    }
}
