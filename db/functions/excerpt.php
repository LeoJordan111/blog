<?php

    function machineCafe (int $nbsucre, bool $the) {
        if ($the) {
        return "thé avec " . $nbsucre . " sucres";
        } else {
            return "café avec " . $nbsucre . " sucres";
        }
    }

    $gobelet = machineCafe(1, false);
?>
