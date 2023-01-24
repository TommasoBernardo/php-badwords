<p>
    <?php
    echo $_POST['frase'];
    ?>
    <br>
    <?php
    $sentence = 'la frase è lunga: ';
    echo $sentence . strlen($_POST['frase']);
    ?>
</p>

<p>
    <?php
    $newFrase = str_replace(strtolower($_POST['word']), '***', strtolower($_POST['frase']));
    echo $newFrase;
    ?>
    <br>
    <?php
    $sentence = 'la nuova frase è lunga : ';
    echo $sentence . strlen($newFrase);
    ?>
</p>