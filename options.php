<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    //Slides Tab
    'tab_slides' => array(
        'type' => 'tab',
        'title' => __('Slides', '{domain}'),

        'options' => array(

            'e25_slide_add' => array(
                'type' => 'addable-box',
                'label' => __('Add Slide', '{domain}'),
                'desc'  => __('Add new slide from here', '{domain}'),
//                'template' => '{{- e25_slide_image }}',
                'size' => 'large',
                'add-button-text' => __('Add Slide', '{domain}'),
                'sortable' => true,
                'box-options' => array(
                    'e25_slide_image' => array(
                        'type' => 'upload',
                        'label' => __('Slide Image', '{domain}'),
                        'desc'  => __('Add slide image from here', '{domain}'),
                    ),
                    'e25_slide_description' => array(
                        'type'  => 'textarea',
                        'label' => __('Slide Description', '{domain}'),
                        'desc'  => __('Add slide description from here', '{domain}'),
                    ),
                )
            )
        )
    ),

    //Slides Settings Tab
    'tab_slide_settings' => array(
        'type' => 'tab',
        'title' => __('Slider Settings', '{domain}'),

        'options' => array(

            'e25_slides_display' => array(
                'type'  => 'slider',
                'properties' => array(
                    'min' => 1,
                    'max' => 5
                ),
                'label' => __('Slide to Display', '{domain}'),
                'desc'  => __(' Select how many slides should be displayed', '{domain}')
            ),

            'e25_slides_auto' => array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker' => array(
                    'e25_slides_auto_choice' => array(
                        'label' => __('Slide Auto Rotation', '{domain}'),
                        'type'  => 'switch',
                        'desc'  => __('Enable or Disable slide auto rotation feature', '{domain}'),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}')
                        ),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}')
                        ),
                    )
                ),

                'choices' => array(
                    'true' => array(
                        'e25_slides_time' => array(
                            'type'  => 'slider',
                            'properties' => array(
                                'min' => 1000,
                                'max' => 5000
                            ),
                            'label' => __('Slide Rotation Time', '{domain}'),
                            'desc'  => __(' Select time duration between slides rotation', '{domain}')
                        ),
                    ),
                ),
            ),

            'e25_slider_arrows' => array(
                'type'  => 'switch',
                'label' => __('Slider Arrows', '{domain}'),
                'desc'  => __('Enable or Disable slider arrows from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),

            'e25_slider_dots' => array(
                'type'  => 'switch',
                'label' => __('Slider Arrows', '{domain}'),
                'desc'  => __('Enable or Disable slider arrows from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),

        )
    ),

    //Slides Styles Tab
    'tab_slide_styles' => array(
        'type' => 'tab',
        'title' => __('Slider Styles', '{domain}'),

        'options' => array(

            'e25_btn_label' => array(
                'type'  => 'addable-box',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Label', '{domain}'),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
                'box-options' => array(
                    'option_1' => array( 'type' => 'text' ),
                    'option_2' => array( 'type' => 'textarea' ),
                ),
                'template' => 'Hello {{- option_1 }}', // box title
                'limit' => 0, // limit the number of boxes that can be added
                'add-button-text' => __('Add', '{domain}'),
                'sortable' => true,
                'size' => 'medium'
            )
        )
    )
);