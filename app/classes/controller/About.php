<?php

namespace App\Controller;

class About extends \App\Controller\Base {

    public function __construct() {
        parent::__construct();

        $view = new \Core\Page\View([
            'title' => 'Welcome to About',
            'header' => ''
        ]);

        $this->page['content'] = $view->render(ROOT_DIR . '/app/views/content.tpl.php');
    }

}
