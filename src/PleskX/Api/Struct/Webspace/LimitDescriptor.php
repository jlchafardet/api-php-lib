<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH.

namespace PleskX\Api\Struct\Webspace;

class LimitDescriptor extends \PleskX\Api\Struct
{
    /** @var array */
    public $limits;

    public function __construct($apiResponse)
    {
        $this->limits = [];

        foreach ($apiResponse->descriptor->property as $propertyInfo) {
            $this->limits[(string)$propertyInfo->name] = new LimitInfo($propertyInfo);
        }
    }
}