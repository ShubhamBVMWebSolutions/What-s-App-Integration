<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactFormMail;
class MessageController extends Controller
{
    public function send_message()
    {
        return view ('send_message');
    }
    public function send(Request $request)
    {
        $request->validate([
            'email'=> 'required|email'
        ]);
        global $number;
        global $message;
        $number = $request->number;
        $message = $request->inquiry;
        $data =[
            'name'      => $request->name,
            'number'    => $request->number,
            'email'     =>$request->email,
            'inquiry'   =>$request->inquiry,
        ];
        Mail::to('shubhamtesy@gmail.com')->send(new ContactFormMail($data));
            $curl = curl_init();
            $postFields = array(
                "messaging_product" => "whatsapp",
                "recipient_type" => "individual",
                "to" => "919079150158",
                "context" => array(
                    "message_id" => "wamid.HBgMOTE5MDc5MTUwMTU4FQIAERgSMUFBNUJBODM1MjRDODAxODZEAA=="
                ),
                "type" => "text",
                "text" => array(
                    "preview_url" => false,
                    "body" => "Name:".$request->name. "\nEmail:".$request->email. "\nNumber: " . $request->number . "\nMessage: " . $request->inquiry
                )
            );
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://graph.facebook.com/v17.0/125900367159221/messages',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($postFields),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer EAAOGbhEdchUBO5hLZCpzrhhTa3PpdcJ1EbNXQLmMLxMPa9dePs1k2lez2CFoZAJIwBOY1KuOZCFHrwAqzNnDMpSsvrXGTjysqD0azmioPZBNcVxMONauRW8a7fT335Dxr3k0UXJ0AZAwCZCxDZBmsw0Khkpl23RCLqkmZAdTZBZBVtjoEDvtSWz0t8U8tCwZBuRhnZCzdTtbGB0cNAXMQoZCqt70ZD'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
                $final_response = json_decode($response, true);
                $final_response['request_name'] = $request->name;
                $final_response['request_email'] = $request->email;
                $final_response['request_message'] = $request->inquiry;
                echo '<pre>';
                print_r($final_response);
                echo '</pre>';
    }
}