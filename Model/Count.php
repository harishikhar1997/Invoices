<?php

namespace Mobilyte\Invoices\Model;

class Count extends \Magento\Framework\Model\AbstractModel
{
   
    protected function _construct()
    {
        $this->_init('Mobilyte\Invoices\Model\ResourceModel\Count');
    }
    
}
