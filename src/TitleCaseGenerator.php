<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $array_small_words = ['a', 'an', 'the', 'at', 'by', 'for', 'in', 'of', 'on', 'to', 'up', 'and', 'as', 'but', 'or', 'nor'];
            $input_words_as_array = explode(" ", $input_title);
            $output = array();
            $lc_output = array();
            foreach ($input_words_as_array as $word) {
                array_push($lc_output, strtolower($word));
            }
            foreach ($lc_output as $lc) {
                if(!in_array($lc, $array_small_words)) {
                    $lc = ucfirst($lc);
                }
                array_push($output, $lc);
            }
            return ucfirst(implode(" ", $output));
        }
    }
?>
