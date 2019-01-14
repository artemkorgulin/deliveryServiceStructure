<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 10.01.2019
 * Time: 15:22
 */

namespace main;

use src\ServiceDeliveryCache\ServiceDeliveryCachePrice;
use src\ServiceDeliveryDB\ServiceDeliveryDBPrice;
use src\ServiceDeliveryHttp\ServiceDeliveryHttpPrice;
use Exception;

try {
	$cacheEngine = new ServiceDeliveryCachePrice();
	$dbEngine = new ServiceDeliveryDBPrice();
	$outerEngine = new ServiceDeliveryHttpPrice();

	if(!$cacheEngine->cache()) {
		if($dbEngine->isExchangeRate()) {
			$cacheEngine->cache($dbEngine->exchangerate());
		} else {
			if($outerEngine->isExchangeRate()) {
				$price = $outerEngine->exchangerate();
				$cacheEngine->cache($price);
				$dbEngine->cache($price);
			}
		}
	}
} catch (Exception $exception) {
	echo $exception->getMessage();
}


