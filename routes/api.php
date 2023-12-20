<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

        //      }else{
        //     $curl = curl_init();
        //     curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://graph.facebook.com/v17.0/125900367159221/messages',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_POSTFIELDS => json_encode(array(
        //         "messaging_product" => "whatsapp",
        //         "recipient_type" => "individual",
        //         "to" => "919079150158",
        //         "type" => "template",
        //         "template" => array(
        //             "name" => "first_message",
        //             "language" => array(
        //                 "code" => "en_US"
        //             )
        //         )
        //     )),
        //         CURLOPT_HTTPHEADER => array(
        //             'Content-Type: application/json',
        //             'Authorization: Bearer EAAOGbhEdchUBO5hLZCpzrhhTa3PpdcJ1EbNXQLmMLxMPa9dePs1k2lez2CFoZAJIwBOY1KuOZCFHrwAqzNnDMpSsvrXGTjysqD0azmioPZBNcVxMONauRW8a7fT335Dxr3k0UXJ0AZAwCZCxDZBmsw0Khkpl23RCLqkmZAdTZBZBVtjoEDvtSWz0t8U8tCwZBuRhnZCzdTtbGB0cNAXMQoZCqt70ZD'
        //         ),
        //     ));
        //     $response = curl_exec($curl);
        //     curl_close($curl);
        //     $final_response = json_decode($response, true);
        //     $final_response['request_name'] = $request->name;
        //     $final_response['request_message'] = $request->inquiry;
        //     echo '<pre>';
        //     print_r($final_response);
        //     echo '</pre>';
        // }
