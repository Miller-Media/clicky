<?php
/**
 * Clicky for WordPress plugin test file.
 *
 * @package Yoast/Clicky/Tests
 */

/**
 * Test class to test the Clicky_Options class.
 */
class Clicky_Options_Test extends Clicky_UnitTestCase {

	/**
	 * Instance of the class being tested.
	 *
	 * @var Clicky_Options
	 */
	private static $class_instance;

	/**
	 * Set up the class instance to be tested.
	 */
	public static function setUpBeforeClass() {
		self::$class_instance = new Clicky_Options();
	}

	/**
	 * @covers Clicky_Options::get
	 */
	public function test_get() {
		$this->assertTrue( self::$class_instance->get() === Clicky_Options::$option_defaults );
	}

	/**
	 * @covers Clicky_Options::__construct
	 */
	public function test___construct() {
		$this->assertTrue( self::$class_instance->options === Clicky_Options::$option_defaults );
	}
}
