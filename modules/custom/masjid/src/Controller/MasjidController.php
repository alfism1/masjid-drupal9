<?php

namespace Drupal\masjid\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class MasjidController extends ControllerBase
{

  public function mainpage()
  {
    // $nids = \Drupal::entityQuery('node')->condition('type', 'acara')->execute();
    // $nodes =  Node::loadMultiple($nids);
    // foreach ($nodes as $value) {
    //   echo '<pre>';
    //   print_r($value->toArray());
    //   echo '</pre>';
    // }
    // exit;


    return [
      '#theme' => 'my_template',
      '#test_var' => $this->t('Test Value'),
    ];
  }
}
