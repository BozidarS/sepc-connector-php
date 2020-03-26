<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData;

/**
 * Class SDQLResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="sdql")
 */
class SDQLResponse
{
    /**
     * @var SDQLSubscribeResponse
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLSubscribeResponse")
     * @Serializer\SerializedName("SubscribeResponse")
     */
    private $_subscribeResponse;

    /**
     * @var SDQLUnsubscribeResponse
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLUnsubscribeResponse")
     * @Serializer\SerializedName("UnsubscribeResponse")
     */
    private $_unsubscribeResponse;

    /**
     * @var SDQLInitialDataResponse
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLInitialDataResponse")
     * @Serializer\SerializedName("GetNextInitialDataResponse")
     */
    private $initialData;

    /**
     * @var SDQLError
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLError")
     * @Serializer\SerializedName("error")
     */
    private $_error;

    /**
     * @return SDQLSubscribeResponse
     */
    public function getSubscribeResponse(): SDQLSubscribeResponse
    {
        return $this->_subscribeResponse;
    }

    /**
     * @return SDQLUnsubscribeResponse
     */
    public function getUnsubscribeResponse(): SDQLUnsubscribeResponse
    {
        return $this->_unsubscribeResponse;
    }

    /**
     * @return SDQLError
     */
    public function getError(): SDQLError
    {
        return $this->_error;
    }

    /**
     * @return SDQLInitialDataResponse
     */
    public function getInitialData(): SDQLInitialDataResponse
    {
        return $this->initialData;
    }
}