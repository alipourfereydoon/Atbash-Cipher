<?php
if(isset($_POST['submit'])) {
    class Atbash{
       public function atbashCipher(string $text): string
        {
            $char = implode('', range('a', 'z'));
            $charrev = strrev($char);
            $text = preg_replace('/[^a-z0-9]/', '',strtolower($text));
            return rtrim(chunk_split(strtr($text, $char, $charrev), 5, ' '));
        }

    }
    $al=new Atbash();
    class RevAtbash{
        public function revatbashCipher(string $string): string
         {
             $char1 = implode('', range('a', 'z'));
             $charrev1 = strrev($char1);
             $text = preg_replace('/[^a-z0-9]/', '',strtolower($string));
             return rtrim(chunk_split(strtr($text, $char1, $charrev1), 5, ' '));
         }
     }
     $al1=new RevAtbash();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>atbash-cipher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h2>atbash-cipher - an ancient encryption system</h2>
        <form action="index.php" method="post">
                    <div class="input-field">
                        <input type="text" name="username" id="username"
                            placeholder="Enter Your statement:">
                        <div class="underline"></div>
                    </div>
                    <p>encode atbash chipher</p>
                            <div class="input-field">
                                <input type="text" name="download" id="download" value="<?php echo $al->atbashCipher($_POST['username']); ?> ">
                                <div class="underline"></div>
                            </div>
                            <p>decode atbash chipher</p>
                            <div class="input-field">
                                <input type="text" id="download" value="<?php echo $al1->revatbashCipher($_POST['download']); ?> ">
                                <div class="underline"></div>
                            </div>
                <input type="submit" name="submit" value="Continue">
            </form>
    </main>
</body>
</html>
