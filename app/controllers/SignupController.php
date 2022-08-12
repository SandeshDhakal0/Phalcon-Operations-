<?php 

class SignupController extends ControllerBase{

    public function indexAction()
    {
        
    }

    public function registerAction()
    {
        $user = new Users();
        // Store and check for errors
        $success = $user->save(
            $this->request->getPost(),
            [
                "name",
                "email",
            ]
        );
        if ($success) {
            // echo "Thanks for registering!";
            $this->flash->success("The user is registered.");
        } else {
            // echo "Sorry, the following problems were generated: ";
            $this->flash->error("Sorry, the following problems were generated.");
            $messages = $user->getMessages();
            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }
        $this->view->disable();
    }
    }



   