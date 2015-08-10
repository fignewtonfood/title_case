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
                array_push($output, ucfirst($word));
            }
            // $intersect = array_intersect($array_small_words, $lc_output);
            // if (!empty($intersect)) {
            foreach ($lc_output as $lc) {

                // foreach ($intersect as $intersection) {
                if(in_array($lc, $array_small_words)) {
                    $lc = ucfirst($lc);
                }
                array_push($output, $lc);
                // }
            }
            // } else {
            //     return implode (" ", $output);
            // }
        }
    }
?>


a, an, the, at, by, for, in, of, on, to, up, and, as, but, or, nor
