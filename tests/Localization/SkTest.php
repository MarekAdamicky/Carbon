<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Localization;

use Carbon\Carbon;
use Tests\AbstractTestCase;

class SkTest extends AbstractTestCase
{
    public function testDiffForHumansLocalizedInSlovak()
    {
        Carbon::setLocale('sk');

        $scope = $this;
        $this->wrapWithNonDstDate(function () use ($scope) {
            $d = Carbon::now()->subSecond();
            $scope->assertSame('pred sekundou', $d->diffForHumans());

            $d = Carbon::now()->subSeconds(2);
            $scope->assertSame('pred 2 sekundami', $d->diffForHumans());

            $d = Carbon::now()->subMinute();
            $scope->assertSame('pred minútou', $d->diffForHumans());

            $d = Carbon::now()->subMinutes(2);
            $scope->assertSame('pred 2 minútami', $d->diffForHumans());

            $d = Carbon::now()->subHour();
            $scope->assertSame('pred hodinou', $d->diffForHumans());

            $d = Carbon::now()->subHours(2);
            $scope->assertSame('pred 2 hodinami', $d->diffForHumans());

            $d = Carbon::now()->subDay();
            $scope->assertSame('pred dňom', $d->diffForHumans());

            $d = Carbon::now()->subDays(2);
            $scope->assertSame('pred 2 dňami', $d->diffForHumans());

            $d = Carbon::now()->subWeek();
            $scope->assertSame('pred týždňom', $d->diffForHumans());

            $d = Carbon::now()->subWeeks(2);
            $scope->assertSame('pred 2 týždňami', $d->diffForHumans());

            $d = Carbon::now()->subMonth();
            $scope->assertSame('pred mesiacom', $d->diffForHumans());

            $d = Carbon::now()->subMonths(2);
            $scope->assertSame('pred 2 mesiacmi', $d->diffForHumans());

            $d = Carbon::now()->subYear();
            $scope->assertSame('pred rokom', $d->diffForHumans());

            $d = Carbon::now()->subYears(2);
            $scope->assertSame('pred 2 rokmi', $d->diffForHumans());

            $d = Carbon::now()->addSecond();
            $scope->assertSame('za sekundu', $d->diffForHumans());

            $d = Carbon::now()->addSeconds(2);
            $scope->assertSame('za 2 sekundy', $d->diffForHumans());

            $d = Carbon::now()->addSeconds(5);
            $scope->assertSame('za 5 sekúnd', $d->diffForHumans());

            $d = Carbon::now()->addYear();
            $scope->assertSame('za rok', $d->diffForHumans());

            $d = Carbon::now()->addYear(2);
            $scope->assertSame('za 2 roky', $d->diffForHumans());

            $d = Carbon::now()->addYear(5);
            $scope->assertSame('za 5 rokov', $d->diffForHumans());
        });
    }
}
