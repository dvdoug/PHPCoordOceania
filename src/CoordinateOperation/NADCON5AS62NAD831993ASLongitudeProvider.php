<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5AS62NAD831993ASLongitudeProvider implements GridProvider
{
    public function provideGrid(): NADCON5Grid
    {
        return new NADCON5Grid(__DIR__ . '/../../resources/nadcon5.as62.nad83_1993.as.lon.trn.20160901.b');
    }
}
