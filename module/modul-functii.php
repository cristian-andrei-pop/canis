<?php
    function MesajAdaugare($text, $tip)
        {
            if(! isset($_SESSION['mesaje']))
                $_SESSION['mesaje'] = [];
            $mesaj = [
                'text' => $text ,
                'tip' => $tip
            ];
            $_SESSION['mesaje'] = $mesaj;
        }

    function MesajAfisare()
    {
        if(! isset($_SESSION['mesaje']))
            return;
        ?>
        <div class="container">
            <?php
            foreach($_SESSION['mesaje'] as $mesaj)
            {
                ?>
                    <div class="alert alert-<?=$mesaj['tip']?>">
                        <?=htmlspecialchars($mesaj['text'])?>
                    </div>
                <?php
            }
            unset($_SESSION['mesaje']);
            ?>
        </div>
        <?php
        echo "MesajAfisare";
    }

    function Login()
    {
        if(isset($_SESSION['user_id']))
            return $_SESSION['user_id'];
        return false;
    }
    
    function Merge()
    {
        echo "Merge";
    }
?>
