<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                    <select name="group" id="group">
                        <option value="">kies een optie</option>
                        <option value="draaimolen">draaimolen</option>
                        <option value="waterpret">waterpret</option>
                        <option value="skydiven">skydiven</option>
                        <option value="achtbaanmooi">achtbaanmooi</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="formgroup">
                <label for="prioriteit">prioriteit</label>
                <input type="checkbox" name="prioriteit" id = "prioriteit">
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-group">
                <label for="newsletter">NieuwsBrief:</label>
                <Input type="checkbox" name="newsletter" id="newsletter"></Input>
                <label for="newsletter">ik wil graag de nieuwsbrief ontvangen</label>

            </div>
            
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
