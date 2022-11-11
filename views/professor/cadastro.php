
<form action="<?php echo $url; ?>/professor" method="POST">
    <select name="_method">
        <option value="POST">POST</option>
        <option value="PUT">PUT</option>
        <option value="PATCH">PATCH</option>
        <option value="DELETE">DELETE</option>
    </select>

    <input type="text" name="first_name" value="Daniele"/>
    <input type="text" name="last_name" value="Medeiros"/>
    <input type="text" name="email" value="danielemedeiros9@gmail.com"/>

    <button>CoffeeCode</button>
</form>