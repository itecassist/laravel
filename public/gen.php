<?php

if(isset($_POST['table']))
{
    echo $_POST['table'];
}
?>
<form method="post">
    <div>
        <label>Table</label>
        <input name="table">
    </div>
    <button type="submit">Generate</button>
</form>
