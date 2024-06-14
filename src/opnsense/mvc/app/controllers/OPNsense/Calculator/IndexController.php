<?php

namespace OPNsense\YourPlugin;

class IndexController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        // 템플릿 렌더링
        $this->view->pick('OPNsense/YourPlugin/index');
    }

    public function calculateAction()
    {
        if ($this->request->isPost()) {
            $a = $this->request->getPost('a', 'float');
            $b = $this->request->getPost('b', 'float');
            $operation = $this->request->getPost('operation', 'string');
            $result = null;

            switch ($operation) {
                case 'add':
                    $result = $a + $b;
                    break;
                case 'subtract':
                    $result = $a - $b;
                    break;
                case 'multiply':
                    $result = $a * $b;
                    break;
                case 'divide':
                    if ($b != 0) {
                        $result = $a / $b;
                    } else {
                        $result = 'Division by zero error';
                    }
                    break;
                default:
                    $result = 'Invalid operation';
            }

            $this->view->result = $result;
        }

        $this->view->pick('OPNsense/YourPlugin/index');
    }
}
