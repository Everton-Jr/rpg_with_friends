<?php

function Redirect(string $URL) {
    echo "
    <script>
        window.location.replace('$URL');
    </script>
    ";
}

function Alert(string $message) {
    echo "
    <script>
        alert('$message');
    </script>
    ";
}

?>