<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "", "locatari");
    if(! $link)
    {
        print "Conexiune imposibila.";
        die();
    }

    if(isset($_POST['operatie']) && $_POST['operatie'] == 'adaugare')
    {
        $q = "INSERT INTO locatari
            (NUME, NR_BLOC, NR_AP, ANGAJAT) 
            VALUES 
            ('{$_POST['NUME']}', '{$_POST['NR_BLOC']}', '{$_POST['NR_AP']}', '{$_POST['ANGAJAT']}')";
        mysqli_query($link , $q);
        header("Location: test.php");
        die();
    }

    if(isset($_POST['operatie']) && $_POST['operatie'] == 'editare')
    {
        $q = "UPDATE locatari SET 
                NUME='{$_POST['NUME']}',
                NR_BLOC='{$_POST['NR_BLOC']}',
                NR_AP='{$_POST['NR_AP']}',
                ANGAJAT='{$_POST['ANGAJAT']}'
              WHERE ID={$_POST['ID']}";
        mysqli_query($link , $q);
        header("Location: ./");
        die();
    }
    if(isset($_GET['operatie']) && $_GET['operatie'] == 'stergere')
    {
        $q = "DELETE FROM locatari WHERE ID={$_GET['id']}";
        mysqli_query($link , $q);
        header("Location: ./");
        die();
    }


    $rez = mysqli_query($link , "SELECT *  FROM locatari ORDER BY NUME");
    $locatari = [];
    while( $L = mysqli_fetch_assoc($rez))
        $locatari[] = $L;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locatari</title>
</head>
<body>
    <a href="test.php/?operatie=adaugare">Adaugare persoana</a>
    <?php
        if(isset($_GET['operatie']) && $_GET['operatie'] == 'adaugare')
        {
            ?>
            <h1>Adaugare persoana</h1>
            <form method="post">
                <input type="hidden" name="operatie" value="adaugare">
                <div>
                    NUME <input name="NUME">
                </div>
                <div>
                    NR_BLOC <input name="NR_BLOC">
                </div>
                <div>
                    NR_AP <input name="NR_AP">
                </div>
                <div>
                    ANGAJAT <input name="ANGAJAT">
                </div>
                <div>
                    <input type="submit" value="Adaugare">
                </div>
            </form>
            <?php
        }

        if(isset($_GET['operatie']) && $_GET['operatie'] == 'editare')
        {
            $q = "SELECT * FROM locatari WHERE ID={$_GET['id']}";
            $rez = mysqli_query($link , $q);
            $contact = mysqli_fetch_assoc($rez);

            ?>
            <h1>Modificare</h1>
            <form method="post">
                <input type="hidden" name="operatie" value="editare">
                <input type="hidden" name="ID" value="<?=$contact['ID']?>">
                <div>
                    NUME <input name="NUME" value="<?=$contact['NUME']?>">
                </div>
                <div>
                    NR_BLOC <input name="NR_BLOC" value="<?=$contact['NR_BLOC']?>">
                </div>
                <div>
                    NR_AP <input name="NR_AP" value="<?=$contact['NR_AP']?>">
                </div>
                <div>
                    ANGAJAT <input name="ANGAJAT" value="<?=$contact['ANGAJAT']?>">
                </div>
                <div>
                    <input type="submit" value="Salvare">
                </div>
            </form>
            <?php
        }
    ?>
    <h1>Locatari</h1>
    <table border="1">
        <tr>
            <th>Nr.</th>
            <th>
                NUME
            </th>
            <th>NR_BLOC</th>
            <th>NR_AP</th>
            <th>ANGAJAT</th>
            <th>OPERATII</th>
        </tr>
        <?php
            $cnt = 0;
            foreach($locatari as $contact)
            {
                $cnt ++;
                ?>
                    <tr>
                        <td>
                            <?=$cnt?>
                        </td>
                        <td>
                            <?=$contact['NUME']?>
                        </td>
                        <td>
                            <?=$contact['NR_BLOC']?>
                        </td>
                        <td>
                            <?=$contact['NR_AP']?>
                        </td>
                        <td>
                            <?=$contact['ANGAJAT']?>
                        </td>
                        <td>
                            <a href="./?operatie=editare&id=<?=$contact['ID']?>">Modificare</a>
                            <br>
                            <a href="./?operatie=stergere&id=<?=$contact['ID']?>">Stergere</a>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </table>


</body>
</html>