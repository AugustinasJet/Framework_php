<?php

namespace App\Controller;

class Home extends \App\Controller\Base {

    public function __construct() {
        parent::__construct();

        $view = new \Core\Page\View([
            'title' => 'Siandien miegam',
            'header' => 'Kregzdutes eina na'
        ]);

        $this->page['content'] = $view->render(ROOT_DIR . '/app/views/content.tpl.php');
    }

}
