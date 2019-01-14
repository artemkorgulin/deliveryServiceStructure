<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: AKorgulin
 * Date: 23.07.2018
 * Time: 15:26
 */

namespace src\ServiceDeliveryDB;


abstract class AbstractServiceDeliveryDB
{
	/** @var ServiceDeliveryContainerDB */
	protected $SDCDB;

	/**
	 * Construct
	 */
	public function __construct(ServiceDeliveryContainerDB $SDCDB) {

	}

	/**
	 * ServiceDeliveryContainerDBEntity
	 */
	public function ServiceDeliveryContainerDBEntity() {}

}