<?php

namespace GetOlympus\Control;

use GetOlympus\Zeus\Control\Controller\Control;
use GetOlympus\Zeus\Translate\Controller\Translate;

/**
 * Builds Image Select control.
 *
 * @package Control
 * @subpackage ImageSelect
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 */

class ImageSelect extends Control
{
    /**
     * @var string
     */
    protected $context = 'imageselect-control';

    /**
     * @var array
     */
    protected $styles = [
        'css'.S.'imageselect.css',
    ];

    /**
     * @var string
     */
    protected $template = 'imageselect.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'imageselectcontrol';

    /**
     * @var integer
     */
    public $column = 1;

    /**
     * @var boolean
     */
    public $multiple = false;

    /**
     * Prepare variables.
     *
     * @param  object  $value
     *
     * @return array
     */
    protected function getVars($value)
    {
        // Update vars
        return [
            't_no_options' => Translate::t('imageselect.errors.no_options', $this->textdomain),
            'column'       => 2 === $this->column ? 2 : 1,
            'multiple'     => $this->multiple,
            'value'        => !is_array($value) ? [$value] : $value,
        ];
    }
}
