<?php
Class Contact extends Controller
{
    function index()
    {
        $data['page_title'] = "Contact";

        if(isset($_POST['nom']) && isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
            && isset($_POST['sujet']) && isset($_POST['message']))
        {
            $message = $this->loadModel("message");
            $message->send($_POST);
            echo "<script>
                alert('There are no fields to generate a report');
                //window.location.href='admin/ahm/panel';
                </script>";
        }
        else{
            $this->view("deffay/contact", $data);
        }
    }

    function checkEmail($email) {
        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        return ($find1 !== false && $find2 !== false && $find2 > $find1);
    }

}
