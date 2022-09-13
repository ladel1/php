<?php 

class Form{

    protected $form;

    function __construct($action="",$method="get",$legend="")
    {
        ob_start();
        ?>
            <form action='<?=$action?>' method='<?=$method?>'>
                <fieldset>
                <legend><?=$legend?></legend>
        <?php
        $this->form = ob_get_contents();
        ob_clean();
    }

    function setText($label,$name,$placeholder=""){
        $this->form .="
            <div class='form-control'>
                <label> $label </label>
                <input type='text' name='$name' placeholder='$placeholder'/>
            </div>
        ";
    }


    function setSubmit($name,$value){
        $this->form .="
            <div class='form-control'>
                <input type='submit' name='$name' value='$value' />
            </div>
        ";
    }

    function getForm(){
        $this->form .= "
                </fieldset>
            </form>
        ";
        return $this->form;
    }


}