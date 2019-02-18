<?php

namespace Mobilyte\Invoices\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Mobilyte\Invoices\Model\Post',
            'Mobilyte\Invoices\Model\ResourceModel\Post'
        );
    }
}
