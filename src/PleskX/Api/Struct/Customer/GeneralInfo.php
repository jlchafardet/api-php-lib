<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH.

namespace PleskX\Api\Struct\Customer;

class GeneralInfo extends \PleskX\Api\Struct
{
    /** @var string */
    public $personalName;

    /** @var string */
    public $login;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            ['pname' => 'personalName'],
            'login',
        ]);
    }
}