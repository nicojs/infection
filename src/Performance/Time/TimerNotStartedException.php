<?php
/**
 * Copyright © 2017-2018 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */

declare(strict_types=1);

namespace Infection\Performance\Time;

/**
 * @internal
 */
final class TimerNotStartedException extends \Exception
{
    public static function create()
    {
        return new self('Timer must be started before stopping.');
    }
}