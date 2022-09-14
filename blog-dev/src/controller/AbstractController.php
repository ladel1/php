<?php 

    namespace App\Controller;
    abstract class AbstractController{


        private function extractCssNJs(&$html){
            $css=$js="";
            $patternCSS = "/<css>(.*)<\/css>/ms";
            $flag = preg_match($patternCSS,$html,$matches);
            if($flag){
                $css = $matches[1];
            }
            $html=preg_replace($patternCSS,"",$html);
            $patternJS = "/<js>(.*)<\/js>/ms";
            $flag=preg_match($patternJS,$html,$matches);
            $html=preg_replace($patternJS,"",$html); 
            if($flag){
                $js = $matches[1];
            }                        
            return [$css,$js];

        }

        protected function renderView($templatename,$params=[],$pageTitle=""){
            ob_start();
            extract($params);
            require_once "src/view/$templatename.php";
            $html = ob_get_contents();
            ob_clean();
            $extracted = $this->extractCssNJs($html);
            $datas = [
                "title"=>$pageTitle,
                "css"=>$extracted[0],
                "js"=>$extracted[1],
                "content"=>$html
            ];
            return $datas;
        }

    }