<?php

declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;
use src\ServiceDeliveryCache\ServiceDeliveryCachePrice;
use src\ServiceDeliveryDB\ServiceDeliveryDBPrice;
use src\ServiceDeliveryHttp\ServiceDeliveryHttpPrice;
use DateTime;


class DevTest extends TestCase
{
    public function testExchangeRateFromCacheStore()
    {
        $dateTime = new DateTime('now');
        $excahngeRate = [
            $now->format('u') => [
                'exchange_rate' => '45.12'
            ]
        ];

	    $cacheEngine = new ServiceDeliveryCachePrice();

        $this->assertEquals(
	        45.12,
	        $cacheEngine->value($excahngeRate)
        );
    }

    public function testExchangeRateFromRemoteStore()
    {
        $now = new DateTime('now');

	    $outerEngine = new ServiceDeliveryHttpPrice();

        $this->assertEquals(
	        45.12,
	        $outerEngine->value($now)
        );
    }

    public function testExchangeRateFromDB()
    {
	    $now = new DateTime('now');

	    $dbEngine = new ServiceDeliveryDBPrice();

	    $this->assertEquals(
		    45.12,
		    $dbEngine->value($now)
	    );
    }

    public function testExchangeRateFromRemoteSourceWhenItsUnavailable()
    {
        $now = new DateTime('now');
	    $outerEngine = new ServiceDeliveryHttpPrice();

        $this->assertFalse(
	        $outerEngine->exchangerate($now)->isAvailable()
        );
    }
}
