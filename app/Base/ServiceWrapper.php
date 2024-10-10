<?php

namespace App\Base;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\Facades\DB;

class ServiceWrapper {
    public function __invoke(\Closure $action , \Closure $reject = null){
        DB::beginTransaction();
        try {
            $actionResult = $action();
            DB::commit();
        } catch (\Throwable $th) {
            !is_null($reject) &&  app()[ExceptionHandler::class]->report($th);
            DB::rollBack();
            return new ServiceResult(false,$th->getMessage() );
        }

        return new ServiceResult(true , $actionResult);
    }



}
