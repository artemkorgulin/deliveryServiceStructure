<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 10.01.2019
 * Time: 14:03
 */

namespace src\ServiceDeliveryCache;

use src\ServiceDeliveryCache\AbstractServiceDeliveryCache;
use src\ServiceDeliveryCache\ServiceDeliveryCache;

class ServiceDeliveryCachePrice extends AbstractServiceDeliveryCache implements ServiceDeliveryCache
{
	public function __construct(){}

	public function value(){}
	public function cache(){}
	public function exchangerate(){}
}