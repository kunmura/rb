<form>
    <fieldset>
    
    <div>
        <select name="player">
        <?php
        $i = 0;
        foreach ($players as $player):
        ?>
        <option value="<?php echo $player; ?>"><?php echo $player; ?></option>
        <?php endforeach; ?>
        </select>
        
        <br>
        
        <select name="card">
        <?php
        $i = 0;
        foreach ($cards as $card):
        ?>
        <option value="<?php echo $card; ?>"><?php echo $card; ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    
    <div class="input-append">
        <input class="span2" id="appendedInputButton" type="text">
        <button class="btn" type="submit">追加</button>
    </div>
    
    </fieldset>
</form>