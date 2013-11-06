<?php

/**
 * Optimiseweb Redirects Model System Config Source Version
 *
 * @package     Optimiseweb_Redirects
 * @author      Kathir Vel (sid@optimiseweb.co.uk)
 * @copyright   Copyright (c) 2013 Optimise Web Limited
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_Redirects_Model_System_Config_Source_Version
{

    protected $_options;

    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = array(
                    array(
                            'value' => 'legacy',
                            'label' => 'Legacy'
                    ),
                    array(
                            'value' => 'redirects1',
                            'label' => 'Redirects System v1.0'
                    ),
            );
        }
        return $this->_options;
    }

}
