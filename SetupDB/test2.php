<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="text" class="col-2">FirstName:</label> 
    <div class="col-4">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2">LastName:</label> 
    <div class="col-sm-4">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-1">City</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="rdocity" id="rdocity_0" type="radio" class="custom-control-input" value="zhongli"> 
        <label for="rdocity_0" class="custom-control-label">Zhongli</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="rdocity" id="rdocity_1" type="radio" class="custom-control-input" value="taoyuan"> 
        <label for="rdocity_1" class="custom-control-label">Taoyuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="rdocity" id="rdocity_2" type="radio" class="custom-control-input" value="pingtong"> 
        <label for="rdocity_2" class="custom-control-label">Pingtong</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">寄出</button>
    </div>
  </div>
</form>