<?php
    function empty_data($data) {
        $empty = false;
        $len = count($data);

        for($i = 0; $i < $len; $i++) {
            if(empty($data[$i])) {
                $empty = true;
            }
        }

        return $empty;
    }
?>