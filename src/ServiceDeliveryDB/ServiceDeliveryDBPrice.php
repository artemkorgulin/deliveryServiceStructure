<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 10.01.2019
 * Time: 14:03
 */

namespace src\ServiceDeliveryDB;

use src\ServiceDeliveryDB\AbstractServiceDeliveryDB;
use src\ServiceDeliveryDB\ServiceDeliveryDB;

class ServiceDeliveryDBPrice extends AbstractServiceDeliveryDB implements ServiceDeliveryDB
{
	public function __construct(){}

	public function value(){}
	public function isExchangeRate(){}
	public function exchangerate(){}
}