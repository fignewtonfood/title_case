<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_words_as_array = explode(" ", $input_title);
            $output = array();
            foreach ($input_words_as_array as $word) {
                array_push($output, ucfirst($word));
            }
            return implode (" ", $output);
        }
    }
?>
