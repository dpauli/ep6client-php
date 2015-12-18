<?php
/**
 * This file represents the image class.
 *
 * @author David Pauli <contact@david-pauli.de>
 * @since 0.0.0
 */
namespace ep6;
/**
 * This is the image class which is used for images.
 *
 * @author David Pauli <contact@david-pauli.de>
 * @since 0.0.0
 * @api
 * @package ep6
 * @subpackage Shopobjects\Image
 */
class Image {

	/** @var string This is the path to the origin URL. */
	private $URL;

	/**
	 * To create a new image object use this constructor with the original URL.
	 *
 	 * @author David Pauli <contact@david-pauli.de>
 	 * @since 0.0.0
	 * @param String $url The origin URL of the image.
	 */
	public function __construct($url) {
		$this->URL = $url;
	}

	/**
	 * Gets the original URL of the image.
	 *
 	 * @author David Pauli <contact@david-pauli.de>
 	 * @since 0.0.0
	 * @return String The original URL.
	 */
	public function getOriginURL() {
		return $this->URL;
	}
}