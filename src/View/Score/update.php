
<form method="post">
    <div class="form-group" >
        <label for="exampleInputEmail1">Math score: </label>
        <input type="number" class="form-control"  name="maths" value="<?php echo $score['maths']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Physical score:</label>
        <input type="number" class="form-control" name="physical" value="<?php echo $score['physical']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Chemistry score:</label>
        <input type="number" class="form-control" name="chemistry" value="<?php echo $score['chemistry']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">English score:</label>
        <input type="number" class="form-control"  name="english" value="<?php echo $score['english']?>">
    </div>
    <input type="text" name="student_id" value="<?php echo $score['student_id']?>" hidden>
    <button type="submit" class="btn btn-primary">UPDATE</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>