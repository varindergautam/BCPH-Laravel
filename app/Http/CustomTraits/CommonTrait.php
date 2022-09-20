<?php

namespace App\Http\CustomTraits;

trait CommonTrait {
    public static function sendResponse(array $response, $code)
    {
        try {
            return (new Response($response, $code))->send();
        } catch (Exception $ex) {
            self::showException($ex);
        }
    }

    public static function showException($exception, $code = '500')
    {
        //setting message
        $message = $exception->getMessage();

        if(!is_string($exception)) {
            $user = auth()->user();
            Log::debug("Error catched while sending api response.");
            if($user) {
                Log::debug("User for this error is {$user->id} {$user->email}");
            } else {
                Log::debug("Error without login");
            }
            Log::debug($exception->getMessage()."\n");
            Log::debug($exception->getTraceAsString()."\n");


        }
        $exceptionErrorResponse = [
            "CODE" => $code,
            "MESSAGE" => $message,
            "RESULT" => []
        ];

        $responseCode = (is_numeric($code) && $code > 0) ? $code : config('HttpCodes.fail');

        (new Response($exceptionErrorResponse, config('HttpCodes.fail')))->header('Content-Type', 'application/json')->send();
        exit;
    }

    public static function getExceptionLog($ex){
        Log::error("Error occured ".$ex->getMessage());
        Log::error("Error occured ".$ex->getTraceAsString());
        return true;
    }
}
