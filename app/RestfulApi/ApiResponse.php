<?php

namespace App\RestfulApi;

// use function PHPUnit\Framework\isNull;

class ApiResponse
{
    private ?string $message= null;
    private mixed  $data = null;
    private int $status = 200;
    private array $Appends = [];


    public function SetMessage( string $message):void{
        $this->message=$message;
    }
    public function Setdata( mixed $data):void{
        $this->data =$data;
    }
    public function SetStatus( int $Status):void{
        $this->status=$Status;
    }

    public function SetAppends( array $Appends):void{
        $this->Appends=$Appends;

    }

    public function Response(){
        $body = [];
        !is_null($this->message) && $body['message'] = $this->message;
        !is_null($this->data) && $body['data'] = $this->data;
        $body = $body + $this->Appends;
        return response()->json($body , $this->status);
    }

}
