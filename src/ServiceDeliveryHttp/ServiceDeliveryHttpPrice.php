<?php

declare(strict_types=1);


/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 10.01.2019
 * Time: 14:03
 */

namespace src\ServiceDeliveryHttp;

use src\ServiceDeliveryHttp\AbstractServiceDeliveryHttp;
use src\ServiceDeliveryHttp\ServiceDeliveryHttp;

class ServiceDeliveryHttpPrice extends AbstractServiceDeliveryHttp implements ServiceDeliveryHttp
{
	public function __construct(){}

	public function value(){}
	public function isExchangeRate(){}
	public function exchangerate(){}
}