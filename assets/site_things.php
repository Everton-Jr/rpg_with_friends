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

class Site {
    private string $TITLE;
    private string $ROOT_PATH;

    public function __construct(string $FILE_NAME) {
        $this->TITLE = $FILE_NAME;
        // $this->ROOT_PATH = $ROOT_PATH;
    }

    private function Links() {
        ?>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="/assets/scss/main.css">
        <?php
    }

    public function Start() {
        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->TITLE ?></title>
            <?php $this->Links() ?>
        </head>
        <?php
    }

    public function End() {
        ?>
        </html>
        <?php
    }
}
?>