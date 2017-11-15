<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace HumanElement\Squashtoberfest\Ui\Component\Listing\Page;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Options tree for "Categories" field
 */
class Options implements OptionSourceInterface
{
    
    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray() {
            
        return array(array('value' => 'tmp', 'label' => 'temporary'));
        
    }
    
    
}