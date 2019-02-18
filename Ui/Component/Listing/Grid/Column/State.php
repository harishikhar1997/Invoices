<?php
namespace Mobilyte\Invoices\Ui\Component\Listing\Grid\Column;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;

class State extends Column
{
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                switch ($item['state']) {
                    case 1:
                        $item['state']="Pending";
                        break;
                    case 2:
                        $item['state']="Paid";
                        break;
                    case 3:
                        $item['state']="Cancelled";
                        break;
                }
            }
        }
        return $dataSource;
    }
}
