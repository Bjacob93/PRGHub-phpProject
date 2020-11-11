<?php 
    include_once 'header.php';
    ?>
    <script src="js/addCharmJavaScript.js"></script>

    <section class="addCharm-Form">
        <h2>Add charm</h2>
        <div class="addCharm-form-form">
            <form action="includes/addCharm.inc.php" method="post">
                Exaltation
                <select name="exaltationType" id="exaltationSelection" onchange=exaltedtionSelection()>
                    <option>---</option>
                    <option value="solar">Solar</option>
                    <option value="lunar">Lunar</option>
                    <option value="sidereal">Sidereal</option>
                    <option value="alchemical">Alchemical</option>
                    <option value="terrestial">Terrestial</option>
                    <option value="infernal">Infernal</option>
                    <option value="abyssal">Abyssal</option>
                    <option value="behemoths">Behemoths</option>
                    <option value="dragonKings">Dragon Kings</option>
                    <option value="fairFolk">Fair Folk</option>
                    <option value="god-Blooded">God-Blooded</option>
                    <option value="mountainFolk">Mountain Folk</option>
                    <option value="spirits">Spirits</option>
                </select>

                <select name="charmTree" id="charmTreeSelection" onchange="martialArtsChosen('martialArtsSelectionDivId', this, 'Martial Arts')">
                    <option>---</option>
                </select>

                <div id="martialArtsSelectionDivId" style="display: none;">
                    <select name="martialArtsTree" id="martialArtsSelection">
                        <option>---</option>
                    </select>
                </div>

                <input type="text" name="charmName" placeholder="Solar Hero Form">
                <input type="text" name="charmCost" placeholder="5 motes">
                <input type="text" name="minimumStatRequirements" placeholder="5 Strength, 5 Martial Arts">
                <input type="text" name="charmType" placeholder="Form">
                <input type="text" name="charmKeywords" placeholder="Obvious">
                <input type="text" name="charmDuration" placeholder="One Scene">
                <input type="text" name="prerequisiteCharm" placeholder="X charm, Y charm">
                <input type="text" name="charmDescription" placeholder="Description">
                <button type="sumbit">Submit</button>
            </form>
        </div>
    </section>


    <?php 
        include_once 'footer.php';
    ?>