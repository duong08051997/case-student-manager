<form method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="gender" placeholder="gender">
    <input type="text" name="address" placeholder="address">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="class_id" value="<?php echo $class['name']?>">

    <button type="submit" >ADD</button>
    <button onclick="window.history.go(-1); return false;">CANCEL</button>
</form>