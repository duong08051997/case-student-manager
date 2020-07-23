
<form method="post">
    <div class="form-group" >
        <label for="exampleInputEmail1">Math score: </label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="maths" placeholder="Maths score">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Physical score:</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="physical" placeholder="Physical score">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Chemistry score:</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="chemistry" placeholder="Chemistry score">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">English score:</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="english" placeholder="English score">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>