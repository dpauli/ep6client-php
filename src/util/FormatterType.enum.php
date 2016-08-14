<?php
namespace ep6;
/**
 * The Formatter Type 'enum'.
 *
 * This are the possible Formatter Types to use.
 *
 * @author David Pauli <contact@david-pauli.de>
 * @package ep6
 * @since 0.2.0
 * @subpackage Util
 */
abstract class FormatterType {
	/** @var String Use this for adding a img tag. **/
	const IMAGE = "IMAGE";
	/** @var String Use this for adding a strong tag. **/
	const BOLD = "BOLD";
	/** @var String Use this for adding an em tag. **/
	const ITALIC = "ITALIC";
	/** @var String Use this for adding an a tag. **/
	const HYPERLINK = "HYPERLINK";
	/** @var String Use this for adding a br tag. **/
	const NEWLINE = "NEWLINE";
}
?>