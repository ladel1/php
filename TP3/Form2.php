<?php 

    require_once "Form.php";
    class Form2 extends Form{


        function setRadio($label,$name,$group){
            $this->form .= "
                <div class='form-control'>
                    <label> $label </label>
                    <input type='radio' name='$group' value='$name' />
                </div>
            ";
        }

        function setLabel($label){
            $this->form .= " <label> $label </label> ";
        }


        function setCheckbox($label,$name){
            $this->form .= "
                <div class='form-control'>
                    <label> $label </label>
                    <input type='checkbox' name='$name' value='$name' />
                </div>
            ";
        }


    }