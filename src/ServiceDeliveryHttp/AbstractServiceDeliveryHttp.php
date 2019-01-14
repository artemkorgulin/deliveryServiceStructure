<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 23.07.2018
 * Time: 15:26
 */

namespace src\ServiceDeliveryHttp;


abstract class AbstractServiceDeliveryHttp
{
	/** @var ServiceDeliveryContainer */
	protected $SDC;

	/**
	 * Construct
	 */
	public function __construct(ServiceDeliveryContainer $SDC) {

	}

	/**
	 * ServiceDeliveryContainerEntity
	 */
	public function ServiceDeliveryContainerEntity() {}
}