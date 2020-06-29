<?php

namespace Drupal\form_api\Plugin\rest\extend;
use Drupal\Core\Url;
use Drupal\Core\Database\Database;

use Drupal\rest\Plugin\extendBase;
use Drupal\rest\extendResponse;


class Demoextend extends extendBase {

  
  public function get() {
    #echo "012";die;
    #$conn = Database::getConnection();
    $result = \Drupal::database()->select('registration', 'n')
            ->fields('n', array('vid', 'first_name', 'last_name'))
            ->execute()->fetchAllAssoc('vid');
    #print_r($result);die;
    $result = json_decode(json_encode($result), true);
    #$response = [$result];
    return new extendsResponse($result);
  }
}

