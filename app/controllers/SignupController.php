<?php 

class SignupController extends ControllerBase{

    public function indexAction()
    {
        
    }

    public function registerAction()
    {
        $user = new Users();
        // Store and check for errors
            // var_dump($this->request->getPost());die();
        $success = $user->save(
            $this->request->getPost(),
            [
                "name",
                "email",
            ]
        );
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



   