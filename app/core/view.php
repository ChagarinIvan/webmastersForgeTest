<?php

class View {
    public function generate($content_view, $template_view, $data = array(), $lang){
        include 'app/views/'.$template_view;
    }
}