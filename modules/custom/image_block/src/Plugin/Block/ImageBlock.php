<?php

namespace Drupal\image_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Render\Element\FormElement;



/**
 * Provides a 'ImageBlock' block.
 *
 * @Block(
 * id = "image_block",
 * admin_label = @Translation("block image"),
 * )
 */


class ImageBlock extends BlockBase {


    /**
     * {@inheritdoc}
     */
    public function build() {

        $config = $this->getConfiguration();
        if ($file = file_load($config['block_bg_image'][0])) {
            $file_url = file_create_url($file->getFileUri());
        }else {
            $file_url = '';
        }

        $title = isset($config['label']) ? $config['label'] : '';
        $description = isset($config['block_description']['value']) ? $config['block_description']['value'] : '';


        $block =  array(
            '#title' => $title,
            '#image' => $file_url,
            '#description' => $description,
            '#id' => $config['block_id'],
        );
        return array(
            '#theme' => 'image_block_block',
        ) + $block;
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        $form = parent::blockForm($form, $form_state);

        //Retrieve existing configuration for this block
        $config = $this->getConfiguration();

        //Add our custom field
        $form['block_bg_image'] = array(
            '#type' => 'managed_file',
            '#title' => t('Image de fond'),
            '#upload_location' => 'public://',
            '#default_value' => isset($config['block_bg_image']) ? $config['block_bg_image'] : '',
            '#upload_validators' => array(
                'file_validate_extensions' => array('gif png jpg jpeg'),
            ),
        );

        $form['block_description'] = array(
            '#type' => 'text_format',
            '#title' => t('Description'),
            '#default_value' => isset($config['block_description']['value']) ? $config['block_description']['value'] : '',
            '#format' => isset($config['block_description']['format']) ? $config['block_description']['format'] : '',
        );

        $form['block_id'] = array(
            '#type' => 'textfield',
            '#tilte' => 'Id du block',
            '#default_value' => isset($config['block_id']) ? $config['block_id'] : '',
        );


        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {

        $values = $form_state->getValues();

       // $fid = $form_state->getValue(array('block_bg_image', 0));
        //$file = file_load($fid);
        //$file->status = FILE_STATUS_PERMANENT;
        //file_save($file);
        //$finfo = file_managed_file_save_upload($form, $form_state);


        $this->setConfiguration($values);

    }

}