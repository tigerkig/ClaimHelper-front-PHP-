<?php
    session_start();
    echo isset($_SESSION['Claims_Type']) ? $_SESSION['Claims_Type'] : '' ;
?>