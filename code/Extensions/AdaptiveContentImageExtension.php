<?php

use SilverStripe\Core\Extension;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FieldList;

/**
 * Class AdaptiveContentImageExtension
 */
class AdaptiveContentImageExtension extends Extension
{
    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList &$fields)
    {

        $fields->addFieldToTab(
            'Root.Main',
            new TextareaField('Content', 'Content')
        );

    }
}
