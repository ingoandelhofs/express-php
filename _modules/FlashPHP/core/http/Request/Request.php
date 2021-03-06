<?php

namespace FlashPHP\core\http\Request;
use FlashPHP\helpers\AdvancedNullObject;
use FlashPHP\core\database\Database;

/**
 * Class Request
 * Access request body, session, cookie, files, database, params, ...
 *
 * @author Ingo Andelhofs
 *
 * @uses RequestBodyHandler
 * @uses RequestSessionHandler
 * @uses RequestCookieHandler
 * @uses RequestFileHandler
 * @uses Database
 * @uses AdvancedNullObject
 */
class Request {
    public $body;
    public $session;
    public $cookie;
    public $files;
    public $params;

    public $db;

    public function __construct($param_array) {
        $this->body = new RequestBodyHandler();
        $this->session = new RequestSessionHandler();
        $this->cookie = new RequestCookieHandler();
        $this->files = new RequestFileHandler();

        $this->params = new AdvancedNullObject($param_array);
        $this->db = new Database(); // TODO: Change to Database::instance() -> singleton
    }
};