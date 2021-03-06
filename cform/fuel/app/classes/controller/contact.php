<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

class Controller_Contact extends Controller
{
	public static function action_index()
	{
		$data['category'] = array(
			0 => '',
			1 => 'TEST1',
			2 => 'TEST2',
			3 => 'TEST3',
		);
		return Response::forge(View::forge('contact/index', $data));
	}

	public static function action_sended()
	{
		return Response::forge(View::forge('contact/sended'));
	}

	public static function post_sendmail()
	{
		Mail::send(\Fuel\Core\Input::post());
		return Response::forge(View::forge('contact/sended'));
	}

}