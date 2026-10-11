<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5NAD83MA11MATRF20222020GuamCnMILongitudeProvider implements GridProvider
{
    public function provideGrid(): NADCON5Grid
    {
        return new NADCON5Grid(__DIR__ . '/../../resources/nad83_ma11.matrf2022_2020.guamcnmi.lons.trn.20260731.le.b');
    }
}
