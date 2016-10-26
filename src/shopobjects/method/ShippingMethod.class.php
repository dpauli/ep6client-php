<?php
/**
 * This file represents the Shipping Method class.
 *
 * @author David Pauli <contact@david-pauli.de>
 * @since 0.1.3
 */
namespace ep6;
/**
 * This is a Shipping Method class to handle possible shipping methods.
 *
 * @author David Pauli <contact@david-pauli.de>
 * @package ep6
 * @since 0.1.3
 * @subpackage Shopobjects\Method
 */
class ShippingMethod {

	use ErrorReporting;

	/** @var String|null The ID of the shipping method. **/
	private $shippingMethodId = null;

	/** @var String|null The name of the shipping method. **/
	private $name = null;

	/**
	 * This is the constructor.
	 *
	 * @author David Pauli <contact@david-pauli.de>
	 * @param String[] $shippingMethodParameter The shipping method in an array to construct.
	 * @since 0.1.3
	 */
	public function __construct($shippingMethodParameter) {

		self::errorReset();

		// if parameter is no string
		if (!InputValidator::isArray($shippingMethodParameter)) {

			$this->errorSet("SM-1");
			Logger::error("ep6\ShippingMethod\nThe shipping method parameter " . $shippingMethodParameter . " is no array.");
			return;
		}

		if (!InputValidator::isEmptyArrayKey($shippingMethodParameter, "id")) {

			$this->shippingMethodId = $shippingMethodParameter["id"];
		}

		if (!InputValidator::isEmptyArrayKey($shippingMethodParameter, "name")) {

			$this->name = $shippingMethodParameter["name"];
		}

	}

	/**
	 * Prints the Shipping Method object as a string.
	 *
	 * This function returns the setted values of the Shipping Method object.
	 *
	 * @author David Pauli <contact@david-pauli.de>
	 * @return String The Shipping Method as a string.
	 * @since 0.2.0
	 */
	public function __toString() {

		return "<strong>Shipping Method ID:</strong> " . $this->shippingMethodId . "<br/>" .
				"<strong>Name:</strong> " . $this->name . "<br/>";
	}

	/**
	 * Returns the ID of the shipping method.
	 *
	 * @author David Pauli <contact@david-pauli.de>
	 * @return String The shipping method ID.
	 * @since 0.1.3
	 */
	public function getID() {

		self::errorReset();
		return $this->shippingMethodId;
	}

	/**
	 * Returns the name of the shipping method.
	 *
	 * @author David Pauli <contact@david-pauli.de>
	 * @return String The name.
	 * @since 0.1.3
	 */
	public function getName() {

		self::errorReset();
		return $this->name;
	}
}
?>