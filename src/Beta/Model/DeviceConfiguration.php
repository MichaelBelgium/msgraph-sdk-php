<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfiguration File
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
* DeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfiguration extends Entity
{
    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DeviceConfiguration
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DeviceConfiguration
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the supportsScopeTags
    *
    * @return bool The supportsScopeTags
    */
    public function getSupportsScopeTags()
    {
        if (array_key_exists("supportsScopeTags", $this->_propDict)) {
            return $this->_propDict["supportsScopeTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supportsScopeTags
    *
    * @param bool $val The supportsScopeTags
    *
    * @return DeviceConfiguration
    */
    public function setSupportsScopeTags($val)
    {
        $this->_propDict["supportsScopeTags"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceConfiguration
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return DeviceConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return DeviceConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    *
    * @param int $val The version
    *
    * @return DeviceConfiguration
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the groupAssignments
     *
     * @return array The groupAssignments
     */
    public function getGroupAssignments()
    {
        if (array_key_exists("groupAssignments", $this->_propDict)) {
           return $this->_propDict["groupAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the groupAssignments
    *
    * @param DeviceConfigurationGroupAssignment $val The groupAssignments
    *
    * @return DeviceConfiguration
    */
    public function setGroupAssignments($val)
    {
		$this->_propDict["groupAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param DeviceConfigurationAssignment $val The assignments
    *
    * @return DeviceConfiguration
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    *
    * @param DeviceConfigurationDeviceStatus $val The deviceStatuses
    *
    * @return DeviceConfiguration
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
     *
     * @return array The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists("userStatuses", $this->_propDict)) {
           return $this->_propDict["userStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStatuses
    *
    * @param DeviceConfigurationUserStatus $val The userStatuses
    *
    * @return DeviceConfiguration
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceStatusOverview
    *
    * @return DeviceConfigurationDeviceOverview The deviceStatusOverview
    */
    public function getDeviceStatusOverview()
    {
        if (array_key_exists("deviceStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStatusOverview"], "Microsoft\Graph\Beta\Model\DeviceConfigurationDeviceOverview")) {
                return $this->_propDict["deviceStatusOverview"];
            } else {
                $this->_propDict["deviceStatusOverview"] = new DeviceConfigurationDeviceOverview($this->_propDict["deviceStatusOverview"]);
                return $this->_propDict["deviceStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceStatusOverview
    *
    * @param DeviceConfigurationDeviceOverview $val The deviceStatusOverview
    *
    * @return DeviceConfiguration
    */
    public function setDeviceStatusOverview($val)
    {
        $this->_propDict["deviceStatusOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the userStatusOverview
    *
    * @return DeviceConfigurationUserOverview The userStatusOverview
    */
    public function getUserStatusOverview()
    {
        if (array_key_exists("userStatusOverview", $this->_propDict)) {
            if (is_a($this->_propDict["userStatusOverview"], "Microsoft\Graph\Beta\Model\DeviceConfigurationUserOverview")) {
                return $this->_propDict["userStatusOverview"];
            } else {
                $this->_propDict["userStatusOverview"] = new DeviceConfigurationUserOverview($this->_propDict["userStatusOverview"]);
                return $this->_propDict["userStatusOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userStatusOverview
    *
    * @param DeviceConfigurationUserOverview $val The userStatusOverview
    *
    * @return DeviceConfiguration
    */
    public function setUserStatusOverview($val)
    {
        $this->_propDict["userStatusOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceSettingStateSummaries
     *
     * @return array The deviceSettingStateSummaries
     */
    public function getDeviceSettingStateSummaries()
    {
        if (array_key_exists("deviceSettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceSettingStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceSettingStateSummaries
    *
    * @param SettingStateDeviceSummary $val The deviceSettingStateSummaries
    *
    * @return DeviceConfiguration
    */
    public function setDeviceSettingStateSummaries($val)
    {
		$this->_propDict["deviceSettingStateSummaries"] = $val;
        return $this;
    }
    
}