<?php

/**
 * Class AdaptiveContentRelated
 */
class AdaptiveContentRelated extends DataExtension
{
    private static $db = array(
        'RelationLink' => 'Varchar(255)'
    );

    private $relationClass;

    /**
     * @param string $relationClass
     */
    public function __construct($relationClass)
    {
        $this->relationClass = $relationClass;
        parent::__construct();
    }

    /**
     * @param $class
     * @param $extension
     * @param $args
     * @return array
     */
    public static function get_extra_config($class, $extension, $args)
    {
        return array(
            'has_one' => array(
                'Relation' => $args[0]
            )
        );
    }

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->replaceField(
            'RelationID',
            new TreeDropdownField(
                'RelationID',
                'Relation',
                $this->relationClass
            )
        );
    }
}
