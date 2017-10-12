<?php
namespace Applib;

class Util 
{
	public static function util_json_decode(string $json, bool $assoc = false, int $depth = 512, int $options = 0)
	{
		$result = json_decode($json, $assoc, $depth, $options);
		if($result === NULL)
		{
			$code = '1';
			$data = [];
			switch (json_last_error()) {
			case JSON_ERROR_NONE:
					$msg = ' - No errors';
					break;
			case JSON_ERROR_DEPTH:
					$msg = ' - Maximum stack depth exceeded';
					break;
			case JSON_ERROR_STATE_MISMATCH:
					$msg = ' - Underflow or the modes mismatch';
					break;
			case JSON_ERROR_CTRL_CHAR:
					$msg = ' - Unexpected control character found';
					break;
			case JSON_ERROR_SYNTAX:
					$msg =  ' - Syntax error, malformed JSON';
					break;
			case JSON_ERROR_UTF8:
					$msg =  ' - Malformed UTF-8 characters, possibly incorrectly encoded';
					break;
			default:
					$msg =  ' - Unknown error';
					break;
			}
		}
		else
		{
			$code = '0';
			$msg  = 'success';
			$data = $result;
		}

		return self::formatReturn($code, $msg, $data, 'array');
	}

	public static function util_json_encode($value, int $options = 0, int $depth = 512)
	{

	}

	public static function formatReturn($code, $msg, $data, $type = 'json')
	{
		$result = [
			'code' => $code,
			'msg'  => $msg,
			'data' => $data,
		];
		
		if($type == 'array')
		{
			return $result;
		}
		else 
		{
			return self::util_json_encode($result);
		}
	}
}
