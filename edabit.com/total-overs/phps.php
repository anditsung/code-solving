<?php

function totalOvers($balls) {
    return intval($balls / 6) . "." . intval($balls % 6);
}
