<?php
namespace HumanElement\Squashtoberfest\Ui\Component\Form;

use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;
use HumanElement\Squashtoberfest\Ui\Component\Listing\Page\Options as SelectOptions;

class AddFillFieldsData extends AbstractModifier
{
    
    private $_selectOptions;
    
    public function __construct(
        SelectOptions $SelectOptions
        )
    {
        $this->_selectOptions = $SelectOptions;
    }
    
    public function modifyMeta(array $meta)
    {
        $meta['fields'] = [
            'arguments' => [
                'data' => [
                    'config' => [
                        'label' => __('Feields'),
                        'sortOrder' => 300,
                        'collapsible' => true,
                        'componentType' => 'fieldset'
                    ]
                ]
            ],
            'children' => [
                'new_field' => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'formElement' => 'select',
                                'componentType' => 'field',
                                'options' => $this->_selectOptions->toOptionArray(),
                                'visible' => 1,
                                'dataScope' => "new_field",
                                'required' => 0,
                                'label' => __('Tilføj nyt felt')
                            ]
                        ]
                    ]
                ]
            ]
        ];

        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function modifyData(array $data)
    {
        return $data;
    }
}