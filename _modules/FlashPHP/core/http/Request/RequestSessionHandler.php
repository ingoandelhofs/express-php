<?php

namespace FlashPHP\core\http\Request;
use FlashPHP\helpers\AdvancedNullObject;

class RequestSessionHandler extends AdvancedNullObject {
  // Constructor
  public function __construct() {
    parent::__construct($this->get_session_array());
  }
  private function &get_session_array() {
    return $_SESSION;
  }
}