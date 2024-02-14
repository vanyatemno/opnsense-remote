<?php
namespace OPNsense\HelloWorld2;
class IndexController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        // pick the template to serve to our users.
        $this->view->pick('OPNsense/HelloWorld2/index');
        $this->view->generalForm = $this->getForm("general");
    }
}