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

function Links(string $PATH) {
    ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="scss/main.css">
    <?php
}

class Site {
    private string $TITLE;
    private string $ROOT_PATH;

    public function __construct(string $FILE_NAME, string $PATH_TO_ROOT) {
        $this->TITLE = $FILE_NAME;
        $this->ROOT_PATH = $PATH_TO_ROOT;
    }

    private function Links() {
        ?>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?= $ROOT_PATH ?>scss/main.css">
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
            <title><?= $TITLE ?></title>
            <?php Links() ?>
        </head>
        <body>
        <?php
    }

    public function Close() {
        ?>
        </body>
        </html>
        <?php
    }
}

?>