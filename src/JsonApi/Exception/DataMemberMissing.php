<?php
namespace WoohooLabs\Yin\JsonApi\Exception;

use WoohooLabs\Yin\JsonApi\Schema\Error;
use WoohooLabs\Yin\JsonApi\Schema\ErrorSource;

class DataMemberMissing extends JsonApiException
{
    public function __construct()
    {
        parent::__construct("Missing `data` member at the document's top level!");
    }

    /**
     * @inheritDoc
     */
    protected function getErrors()
    {
        return [
            Error::create()
                ->setStatus(400)
                ->setCode("DATA_MEMBER_MISSING")
                ->setTitle("Missing `data` member at the document's top level")
                ->setDetail($this->getMessage())
                ->setSource(ErrorSource::fromPointer(""))
        ];
    }
}
