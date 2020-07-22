<form method="post">
    <input type="text" name="name" value="<?php echo $student['name']?>">
    <input type="text" name="age" value="<?php echo $student['age']?>">
    <input type="text" name="gender" value="<?php echo $student['gender']?>">
    <input type="text" name="address" value="<?php echo $student['address']?>">
    <input type="text" name="email" value="<?php echo $student['email']?>">
    <input type="text" name="class_id" value="<?php echo $student['class_id']?>" hidden>

    <button>Update</button>
    <button onclick="window.history.go(-1); return false;">CANCEL</button>
</form>