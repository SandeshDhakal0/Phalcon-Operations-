<?php 
use Phalcon\Http\Request;
// use Phalcon\Filter;


class SignupController extends ControllerBase{

    public function indexAction()
    {
       
    }

    public function registerAction()
    {
        // $request = new Request();
        $user = new Users();

        if (!$this->request->isPost()) {
         return $this->response->redirect('signup');
        }
        $name = $this->request->getPost('name',['trim','string']);
        $email = $this->request->getPost('email',['trim','email']);
        
        // Store and check for errors
        $success = $user->save(
            [
                "name" => $name,
                "email" => $email
            ],
            [
                "name",
                "email"
            ]
        );
        //  print_r($this->request->getPost());
        if ($success) {
            $this->flashSession->success("The user is registered.");
            return $this->response->redirect('signup');
        } else {
            echo "Sorry, the following problems were generated.";
            $messages = $user->getMessages();
            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }
        $this->view->disable();
    }
    }



   