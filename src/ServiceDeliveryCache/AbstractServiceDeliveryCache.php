<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 23.07.2018
 * Time: 15:26
 */

namespace src\ServiceDeliveryCache;


abstract class AbstractServiceDeliveryCache
{
	/** @var ServiceDeliveryContainerCache */
	protected $SDCC;

	/**
	 * Construct
	 */
	public function __construct(ServiceDeliveryContainerCache $SDCC) {

	}

	/**
	 * ServiceDeliveryContainerCacheEntity
	 */
	public function ServiceDeliveryContainerCacheEntity() {}

}