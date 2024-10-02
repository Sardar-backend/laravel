<?php

namespace App\Base;
use Illuminate\Contracts\Debug\ExceptionHandler;



class ServiceWrapper {
    public function __invoke(\Closure $action , \Closure $reject = null){
        try {
            $actionResult = action();
        } catch (\Throwable $th) {
            !is_null($reject) &&  app()[ExceptionHandler::class]->report($th);
            return new ServiceResult(false,$th->getMessage() );
        }

        return new ServiceResult(true , $actionResult);
    }



}
