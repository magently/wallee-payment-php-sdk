<?php
/**
 * Wallee SDK
 *
 * This library allows to interact with the Wallee payment service.
 * Wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;

use Wallee\Sdk\ValidationException;

/**
 * ProductMeteredFeeUpdate model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class ProductMeteredFeeUpdate  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'ProductMeteredFee.Update';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'id' => 'int',
		'version' => 'int',
		'component' => 'int',
		'description' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
		'metric' => 'int',
		'name' => '\Wallee\Sdk\Model\DatabaseTranslatedStringCreate',
		'tierPricing' => '\Wallee\Sdk\Model\ProductMeteredTierPricing'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;

	/**
	 * 
	 *
	 * @var int
	 */
	private $component;

	/**
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	private $description;

	/**
	 * 
	 *
	 * @var int
	 */
	private $metric;

	/**
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
	 *
	 * @var \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	private $name;

	/**
	 * The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
	 *
	 * @var \Wallee\Sdk\Model\ProductMeteredTierPricing
	 */
	private $tierPricing;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['id'])) {
			$this->setId($data['id']);
		}
		if (isset($data['version'])) {
			$this->setVersion($data['version']);
		}
		if (isset($data['component'])) {
			$this->setComponent($data['component']);
		}
		if (isset($data['description'])) {
			$this->setDescription($data['description']);
		}
		if (isset($data['metric'])) {
			$this->setMetric($data['metric']);
		}
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['tierPricing'])) {
			$this->setTierPricing($data['tierPricing']);
		}
	}


	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return ProductMeteredFeeUpdate
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return ProductMeteredFeeUpdate
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Returns component.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getComponent() {
		return $this->component;
	}

	/**
	 * Sets component.
	 *
	 * @param int $component
	 * @return ProductMeteredFeeUpdate
	 */
	public function setComponent($component) {
		$this->component = $component;

		return $this;
	}

	/**
	 * Returns description.
	 *
	 * The description of a component fee describes the fee to the subscriber. The description may be shown in documents or on certain user interfaces.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets description.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $description
	 * @return ProductMeteredFeeUpdate
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Returns metric.
	 *
	 * 
	 *
	 * @return int
	 */
	public function getMetric() {
		return $this->metric;
	}

	/**
	 * Sets metric.
	 *
	 * @param int $metric
	 * @return ProductMeteredFeeUpdate
	 */
	public function setMetric($metric) {
		$this->metric = $metric;

		return $this;
	}

	/**
	 * Returns name.
	 *
	 * The name of the fee should describe for the subscriber in few words for what the fee is for.
	 *
	 * @return \Wallee\Sdk\Model\DatabaseTranslatedStringCreate
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets name.
	 *
	 * @param \Wallee\Sdk\Model\DatabaseTranslatedStringCreate $name
	 * @return ProductMeteredFeeUpdate
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Returns tierPricing.
	 *
	 * The tier pricing determines the calculation method of the tiers. The prices of the different tiers can be applied in different ways. The tier pricing controls this calculation.
	 *
	 * @return \Wallee\Sdk\Model\ProductMeteredTierPricing
	 */
	public function getTierPricing() {
		return $this->tierPricing;
	}

	/**
	 * Sets tierPricing.
	 *
	 * @param \Wallee\Sdk\Model\ProductMeteredTierPricing $tierPricing
	 * @return ProductMeteredFeeUpdate
	 */
	public function setTierPricing($tierPricing) {
		$this->tierPricing = $tierPricing;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

		if ($this->getId() === null) {
			throw new ValidationException("'id' can't be null", 'id', $this);
		}
		if ($this->getVersion() === null) {
			throw new ValidationException("'version' can't be null", 'version', $this);
		}
	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}

