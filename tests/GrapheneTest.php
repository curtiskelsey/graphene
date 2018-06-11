<?php
/**
 * @author      Curtis Kelsey <kelseyc@truman.edu>
 * @copyright   Copyright (c) Truman State University
 */

namespace Graphene\Test;


use Carbon\Carbon;
use Graphene\Graphene;

class GrapheneTest extends AbstractTestCase
{
    public function testCreate()
    {
        $lastWeek = Graphene::create(Carbon::now()->subDays(8), Carbon::now()->subDay());
        $this->assertInstanceOf(Graphene::class, $lastWeek);
    }

    public function testOverlaps()
    {
        $lastWeek = Graphene::create(Carbon::now()->subDays(8), Carbon::now()->subDay());
        $thisWeek = Graphene::create(Carbon::now(), Carbon::now()->addDays(7));

        $this->assertFalse($thisWeek->overlaps($lastWeek));

        $nextWeek = Graphene::create(Carbon::now()->addDays(3), Carbon::now()->addDays(10));
        $this->assertTrue($thisWeek->overlaps($nextWeek));
    }
}