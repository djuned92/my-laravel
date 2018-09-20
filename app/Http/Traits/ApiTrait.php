<?php 

namespace App\Http\Traits;

trait ApiTrait {

	/*
	* status code = 200
	* status ok
	*/
	public function _200($message, $result = false, $code = 200) 
	{
		if($result == true) {
			$response = [
				'success' 	=> true,
				'data'		=> $result,
				'message'	=> $message
			];
		} else {
			$response = [
				'success' 	=> true,
				'message'	=> $message
			];
		}

		return response()->json($response, $code);
	}


	/*
	* status code = 400
	* status bad request
	* ex validation error, missing data etc
	*/
	public function _400($message, $errorMessages = [], $code = 400)
	{
		$response = [
			'success' 	=> false,
			'message'	=> $message
		];

		if(!empty($errorMessages)) {
			$response['error'] = $errorMessages;
		}

		return response()->json($response, $code);
	}

	/*
	* status code = 401
	* status unauthorized
	*/

	public function _401($message, $code = 401)
	{
		$response = [
			'success' => false,
			'message' => $message
		];

		return response()->json($response, $code);
	}

	/*
	* status code = 409
	* status conflict
	* ex Duplicate entries and deleting root objects when cascade-delete is not supported
	*/

	public function _409($message, $code = 409)
	{
		$response = [
			'success' => false,
			'message' => $message
		];

		return response()->json($response, $code);
	}

	/*
	* status code = 500
	* internal server error
	* The general catch-all error when the server-side throws an exception.
	*/
	public function _500($message, $code = 500)
	{
		$response = [
			'success' => false,
			'message' => $message
		];

		return response()->json($response, $code);
	}
}