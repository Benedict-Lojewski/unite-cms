<?php
/**
 * Created by PhpStorm.
 * User: franzwilding
 * Date: 20.04.18
 * Time: 09:27
 */

namespace UniteCMS\CoreBundle\Exception;

/**
 * This exception should be thrown when an expected field (content type, setting type, domain member type) was not
 * found in the given context.
 *
 * Class MissingDomainException
 * @package UniteCMS\CoreBundle\Exception
 */
class MissingFieldException extends InvalidFieldConfigurationException
{
}