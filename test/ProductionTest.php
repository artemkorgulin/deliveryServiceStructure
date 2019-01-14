<?php

declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;
use src\ServiceDeliveryCache\ServiceDeliveryCachePrice;
use src\ServiceDeliveryDB\ServiceDeliveryDBPrice;
use src\ServiceDeliveryHttp\ServiceDeliveryHttpPrice;
use DateTime;

class ProductionTest extends TestCase
{
	public function testResponseFailed()
	{
		$outerEngine = new ServiceDeliveryHttpPrice();

		$this->assertFalse(
			$outerEngine->value()->isExchangeRate(
				function(){
					return false;
				}
			)
		);
	}

    public function testResponseAccept()
    {
	    $outerEngine = new ServiceDeliveryHttpPrice();

        $this->assertEquals(
	        45.12,
	        $outerEngine->value()->isExchangeRate(
		        function(){
			        return true;
		        }
	        )
        );
    }
}