<?php
namespace Jitesoft\Clock;

use DateTimeImmutable;
use Psr\Clock\ClockInterface;

class Clock implements ClockInterface {
    /**
     * Returns the current time as a DateTimeImmutable Object.
     *
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable {
        return new DateTimeImmutable('now');
    }
}
