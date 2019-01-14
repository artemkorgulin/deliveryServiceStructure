<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 23.07.2018
 * Time: 14:44
 */

namespace src\ServiceDeliveryCache;


interface ServiceDeliveryCache
{
	public function value();
	public function cache();
}
