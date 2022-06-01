<?php
class hexagon {
    private $class;
    private $content;

    function __construct(
        $class,
        $content
    ) {
        $this->class = $class;
        $this->content = $content;
    }

    function getHexa() {
        $forma = '';
        $forma = '<div class="hexa">
            <div class="one style '.$this->class.'"></div>
            <div class="two style '.$this->class.'"></div>
            <div class="three style '.$this->class.'">'.$this->content.'</div>
        </div>';
        return $forma;
    }
}