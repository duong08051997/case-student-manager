
<form method="post">
    <div class="form-group" >
        <label for="exampleInputEmail1">Student Name: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Student Name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Age:</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="age">
    </div>

    <label for="exampleInputEmail1">Gender: </label><br>
    <input type="radio"  id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="male" checked> Male<br>
    <input type="radio"  id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" value="female"> Female
    <div class="form-group" >
    <label for="exampleInputEmail1">Address: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" placeholder="Address">
    </div>
    <div class="form-group" >
    <label for="exampleInputEmail1">Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="xxx@gmail.com">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
    <button onclick="window.history.go(-1); return false;" class="btn btn-secondary">CANCEL</button>
</form>