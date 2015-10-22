<?php

/**
 * @file
 * Contains \Drupal\field_group\Element\HtmlElement.
 */

namespace Drupal\field_group\Element;

use Drupal\Core\Render\Element\RenderElement;

/**
 * Provides a render element for a html element.
 *
 * @FormElement("field_group_html_element")
 */
class HtmlElement extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    return array(
      '#theme_wrappers' => array('field_group_html_element'),
    );
  }

}
