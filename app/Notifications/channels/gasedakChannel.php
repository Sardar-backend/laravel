<?php


namespace App\Notifications\channels;
use App\Notifications\notificationCode;
use DateTimeImmutable;
use Ghasedak\DataTransferObjects\Request\SingleMessageDTO;
use Ghasedak\Exceptions\GhasedakSMSException;
use Ghasedak\GhasedaksmsApi;

use function PHPSTORM_META\type;

class gasedakChannel {
    public function send ($notifible, notificationCode $notification){
        $data = $notification->toghasedaksms($notifible);
        $sendDate = new DateTimeImmutable('now');
        $lineNumber = '10008642';
        $receptor = $data['phone'];
        //  $receptor = '09309784061';
        $message = $data['text'];
        // $message = 'text';
        $ghasedaksms = new GhasedaksmsApi(env('GHASEDAK_API_KEY'));

        try {
              $response = $ghasedaksms->sendSingle(new SingleMessageDTO(

                  sendDate: $sendDate,
                  lineNumber: $lineNumber,
                  receptor: $receptor,
                  message: $message
              ));
            //   var_dump($response);
          } catch (GhasedakSMSException $e) {
            //    var_dump($e->getMessage());
                throw $e;

          }

    }
}









// class gasedakChannel {


//     public function send () {

//         $curl = curl_init();

//         curl_setopt_array($curl, array(
//         CURLOPT_URL => 'https://gateway.ghasedak.me/rest/api/v1/WebService/SendOtpWithParams',
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => '',
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => 'POST',
//         CURLOPT_POSTFIELDS =>'{
//         "date": 0,
//         "receptors": [
//             {
//             "mobile": "09309784061",
//             "clientReferenceId": "1"
//             }
//         ],
//         "templateName": "Ghasedak",
//         "Param1": "Code",
//         "isVoice": true,
//         "udh": true
//         }',
//         CURLOPT_HTTPHEADER => array(
//             'Content-Type: application/json',
//             'ApiKey: "2351fd8dcc98550e4a804ac4f9334fe3f57dc452bc4a3fe5c69b68bb2773ed38'
//         ),
//         ));

//         $response = curl_exec($curl);

//         curl_close($curl);
//         echo $response;

//     }
// }
