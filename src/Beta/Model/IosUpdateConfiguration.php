<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosUpdateConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* IosUpdateConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosUpdateConfiguration extends DeviceConfiguration
{
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return IosUpdateConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the activeHoursStart
    *
    * @return TimeOfDay The activeHoursStart
    */
    public function getActiveHoursStart()
    {
        if (array_key_exists("activeHoursStart", $this->_propDict)) {
            if (is_a($this->_propDict["activeHoursStart"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["activeHoursStart"];
            } else {
                $this->_propDict["activeHoursStart"] = new TimeOfDay($this->_propDict["activeHoursStart"]);
                return $this->_propDict["activeHoursStart"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activeHoursStart
    *
    * @param TimeOfDay $val The activeHoursStart
    *
    * @return IosUpdateConfiguration
    */
    public function setActiveHoursStart($val)
    {
        $this->_propDict["activeHoursStart"] = $val;
        return $this;
    }
    
    /**
    * Gets the activeHoursEnd
    *
    * @return TimeOfDay The activeHoursEnd
    */
    public function getActiveHoursEnd()
    {
        if (array_key_exists("activeHoursEnd", $this->_propDict)) {
            if (is_a($this->_propDict["activeHoursEnd"], "Microsoft\Graph\Beta\Model\TimeOfDay")) {
                return $this->_propDict["activeHoursEnd"];
            } else {
                $this->_propDict["activeHoursEnd"] = new TimeOfDay($this->_propDict["activeHoursEnd"]);
                return $this->_propDict["activeHoursEnd"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activeHoursEnd
    *
    * @param TimeOfDay $val The activeHoursEnd
    *
    * @return IosUpdateConfiguration
    */
    public function setActiveHoursEnd($val)
    {
        $this->_propDict["activeHoursEnd"] = $val;
        return $this;
    }
    

     /** 
     * Gets the scheduledInstallDays
     *
     * @return array The scheduledInstallDays
     */
    public function getScheduledInstallDays()
    {
        if (array_key_exists("scheduledInstallDays", $this->_propDict)) {
           return $this->_propDict["scheduledInstallDays"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scheduledInstallDays
    *
    * @param DayOfWeek $val The scheduledInstallDays
    *
    * @return IosUpdateConfiguration
    */
    public function setScheduledInstallDays($val)
    {
		$this->_propDict["scheduledInstallDays"] = $val;
        return $this;
    }
    
    /**
    * Gets the utcTimeOffsetInMinutes
    *
    * @return int The utcTimeOffsetInMinutes
    */
    public function getUtcTimeOffsetInMinutes()
    {
        if (array_key_exists("utcTimeOffsetInMinutes", $this->_propDict)) {
            return $this->_propDict["utcTimeOffsetInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the utcTimeOffsetInMinutes
    *
    * @param int $val The utcTimeOffsetInMinutes
    *
    * @return IosUpdateConfiguration
    */
    public function setUtcTimeOffsetInMinutes($val)
    {
        $this->_propDict["utcTimeOffsetInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the enforcedSoftwareUpdateDelayInDays
    *
    * @return int The enforcedSoftwareUpdateDelayInDays
    */
    public function getEnforcedSoftwareUpdateDelayInDays()
    {
        if (array_key_exists("enforcedSoftwareUpdateDelayInDays", $this->_propDict)) {
            return $this->_propDict["enforcedSoftwareUpdateDelayInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enforcedSoftwareUpdateDelayInDays
    *
    * @param int $val The enforcedSoftwareUpdateDelayInDays
    *
    * @return IosUpdateConfiguration
    */
    public function setEnforcedSoftwareUpdateDelayInDays($val)
    {
        $this->_propDict["enforcedSoftwareUpdateDelayInDays"] = intval($val);
        return $this;
    }
    
}