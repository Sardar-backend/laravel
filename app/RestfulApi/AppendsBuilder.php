<?php

namespace App\RestfulApi;


class AppendsBuilder{

    private ApiResponse $Response;

    public function __construct() {
        $this->Response = new ApiResponse() ;
    }

    public function withMessage( string $message ){
        $this->Response->SetMessage( $message );
        return $this;

    }

    public function withData( mixed $data ){
        $this->Response->Setdata( $data );
        return $this;

    }

    public function withStatus( int $status ){
        $this->Response->SetStatus( $status );
        return $this;

    }

    public function withAppends( array $Appends ){
        $this->Response->SetAppends( $Appends );
        return $this;

    }

    public function build() {
        return $this->Response;
    }
}
