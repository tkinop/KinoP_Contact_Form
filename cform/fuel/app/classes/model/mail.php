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

class Mail
{
	public static function send($input)
	{
		$email = Email::forge();
		$email->from('','test_from');
		$email->to('','test_to');
		$email->subject($input['subject']);
		$email->body($input['body']);

		try
		{
			$email->send();
			$message = '送信完了';
		}
		catch (\EmailValidationFailedException $e)
		{
			$message = '送信に失敗しました。';
		}
		catch (\EmailSendingFailedException $e)
		{
			$message = '送信に失敗しました。';
		}

		Session::set_flash('message', $message);
	}

}