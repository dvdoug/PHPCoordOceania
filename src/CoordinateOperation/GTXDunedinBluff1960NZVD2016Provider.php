<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXDunedinBluff1960NZVD2016Provider implements GridProvider
{
    public function provideGrid(): GTXGrid
    {
        return new GTXGrid(__DIR__ . '/../../resources/dublht1960-nzvd2016.gtx');
    }
}
