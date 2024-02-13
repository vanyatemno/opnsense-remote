<?php
namespace OPNsense\HelloWorld2;

class IndexController extends HelloWorld2 {
    public function indexAction () {
        // takes template (view) and give it to the user
        $this->view->pick('OPNsense/HelloWorld2/index')
    }
}