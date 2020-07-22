<form method="post">

    <input type="text" name="maths" value="<?php echo $score['maths']?>">
    <input type="text" name="physical" value="<?php echo $score['physical']?>">
    <input type="text" name="chemistry" value="<?php echo $score['chemistry']?>">
    <input type="text" name="english" value="<?php echo $score['english']?>">
    <input type="text" name="student_id" value="<?php echo $score['student_id']?>" hidden>

    <button type="submit" >UPDATE</button>
    <button onclick="window.history.go(-1); return false;" >CANCEL</button>
</form>
