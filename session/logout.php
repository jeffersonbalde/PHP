<?php

    session_start();

    session_destroy();
    header('Location: /PHP/13_sessions.php');