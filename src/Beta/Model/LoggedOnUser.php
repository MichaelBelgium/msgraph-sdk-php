<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LoggedOnUser File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* LoggedOnUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class LoggedOnUser extends Entity
{
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return LoggedOnUser
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }

    /**
    * Gets the lastLogOnDateTime
    *
    * @return \DateTime The lastLogOnDateTime
    */
    public function getLastLogOnDateTime()
    {
        if (array_key_exists("lastLogOnDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastLogOnDateTime"], "Microsoft\Graph\Beta\Model\\DateTime")) {
                return $this->_propDict["lastLogOnDateTime"];
            } else {
                $this->_propDict["lastLogOnDateTime"] = new \DateTime($this->_propDict["lastLogOnDateTime"]);
                return $this->_propDict["lastLogOnDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastLogOnDateTime
    *
    * @param \DateTime $val The value to assign to the lastLogOnDateTime
    *
    * @return LoggedOnUser The LoggedOnUser
    */
    public function setLastLogOnDateTime($val)
    {
        $this->_propDict["lastLogOnDateTime"] = $val;
         return $this;
    }
}