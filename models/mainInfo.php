<?php 

class MainInfo {
    public $title;
    public $OriginalTitle;
    public $desc;

    function __construct($_title, $_OriginalTitle, $_desc){
        $this->title = $_title;
        $this->OriginalTitle = $_OriginalTitle;
        $this->desc = $_desc;
        
    }

}

?>