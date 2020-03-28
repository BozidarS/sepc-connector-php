<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventActionStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventActionStatus")
 */
class EventActionStatus
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isAvailable")
    * @Serializer\XmlAttribute()
    */
    private $_isAvailable;

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->_isAvailable;
    }

}