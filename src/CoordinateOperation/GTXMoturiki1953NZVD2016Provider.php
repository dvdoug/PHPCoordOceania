<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class GTXMoturiki1953NZVD2016Provider implements GridProvider
{
    public function provideGrid(): GTXGrid
    {
        return new GTXGrid(__DIR__ . '/../../resources/motuht1953-nzvd2016.gtx');
    }
}
