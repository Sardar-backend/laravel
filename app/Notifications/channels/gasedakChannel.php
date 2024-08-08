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
        $lineNumber = '30005088';
        // dd(0 . $data['phone']);
        $receptor = $data['phone'];
        $message = $data['text'];
        $ghasedaksms = new GhasedaksmsApi(env('GHASEDAK_API_KEY'));

        try {
              $response = $ghasedaksms->sendSingle(new SingleMessageDTO(

                  sendDate: $sendDate,
                  lineNumber: $lineNumber,
                  receptor: $receptor,
                  message: $message
              ));
              var_dump($response);
          } catch (GhasedakSMSException $e) {
            //    var_dump($e->getMessage());
                throw $e;

          }

    }
}
