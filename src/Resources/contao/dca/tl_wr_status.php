<?php

$GLOBALS['TL_DCA']['tl_wr_status'] = array(
    'config' => array
    (
        'dataContainer'               => 'Table',
    ),
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 2,
            'fields'                  => array('sorting'),
            'disableGrouping'         => true,
        ),
        'label' => array
        (
            'fields'                  => array('title', 'color'),
            'format'                  => '%s <span style="color:#b3b3b3;padding-left:3px">[%s]</span>',
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_wr_service']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif',
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_wr_service']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
            ),
        )
    ),
    'palettes' => array
    (
        '__selector__'                => array('protected', 'published'),
        'default'                     => '{title_legend},title,color'
    ),
    // Fields
    'fields' => array
    (
        'id' => array
        (
            'label'                   => array('ID'),
            'search'                  => true,
        ),
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_wr_service']['title'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class' => 'w50'),
        ),
        'color' => array(
            'label'                   => &$GLOBALS['TL_LANG']['tl_wr_service']['title'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>true, 'colorpicker'=>true, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class' => 'w50 wizard'),
        )
    )
);


class tl_wr_status
{
    public function listChild($row){
        return $row['title'];
    }
}