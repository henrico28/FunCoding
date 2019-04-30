<?php
    class View{
        public static function createView($view,$param){
            foreach ($param as $key => $value) {
                $$key=$value;
            }
            ob_start();
            include 'View/'.$view;
            $content = ob_get_contents();
            ob_end_clean();
            ob_start();
            include 'View/layout/head.php';
            $head = ob_get_contents();
            ob_end_clean();
            ob_start();
            include 'View/layout/foot.php';
            $foot = ob_get_contents();
            ob_end_clean();
            echo $head;
            echo $content;
            echo $foot;
        }

        public static function createView1($view, $param){
            foreach ($param as $key => $value) {
                $$key=$value;
            }
            ob_start();
            include 'View/'.$view;
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
    }
?>