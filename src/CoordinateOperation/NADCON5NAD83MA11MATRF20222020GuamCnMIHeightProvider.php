<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class NADCON5NAD83MA11MATRF20222020GuamCnMIHeightProvider implements GridProvider
{
    public function provideGrid(): NADCON5Grid
    {
        return new NADCON5Grid(__DIR__ . '/../../resources/nad83_ma11.matrf2022_2020.guamcnmi.ehtm.trn.20260731.le.b');
    }
}
