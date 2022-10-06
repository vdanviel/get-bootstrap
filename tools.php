<?php

class infotools{

    public $error;

    public function readdata($data = array()){

        if (isset($_GET)) {

            if ($data['name'] == null || $data['name'] == "") {
                $this->error = "Complete the name field.";
                return $this->error;
            }

            if ($data['food'] == null || $data['food'] == "") {
                $data['food'] = "Not Informed.";
            }

            if ($data['color'] == null || $data['color'] == "") {
                $data['color'] = "Not Informed.";
            }

            infotools::confirmuser($data);

        }

    }

    public static function confirmuser($data){

        $name = $data['name'];
        $food = $data['food'];
        $color = $data['color'];

        header("location: http://localhost:8082/displayinfo.php?name=$name&food=$food&color=$color");

    }

}
?>