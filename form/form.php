<form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
  <div class="form-header">
    <h2>Form Heading</h2>
    <p>Form basic info text goes heres if available</p>
  </div>

  <div class="form-section-0">
    <div class="form-group">
      <input name="depth[]" type="checkbox" value="Option 1 [Change Me]">
      <input name="depth[]" type="checkbox" value="Option 2 [Change Me]">
      <!-- Add more checkbox input if needed -->
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <textarea class="form-control" placeholder="Describe Your Project" name="describe-your-project" cols="50" rows="10"></textarea>
      <div class="messages"></div>
    </div>
  </div>
  <div class="form-section-1" style="display: none">
    <div class="form-group">
      <input class="form-control" placeholder="Name*" name="name" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Businesss Name" name="businesss-name" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <select class="form-control  " name="location" id="wRBoW">
        <option value="">Select Any One Option [Change Me]</option>
        <option value="Option One">Option One [Change Me]</option>
        <option value="Option Two">Option Two [Change Me]</option>
      </select>
      <!-- Add more options if needed -->
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="City" name="city" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Zip code" name="zip-code" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Phone Number*" name="phone-number" type="text" value="">
      <div class="messages"></div>
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="Email*" name="email" type="email" value="">
      <div class="messages"></div>
    </div>
  </div>
  <div class="form-footer"><button type="button" class="next btn btn-primary">Next</button> <button type="submit" class="submitButton btn btn-primary" style="display: none">
      <span class="spinner-border spinner-border loader" aria-hidden="true" style="display: none"></span>
      Submit </button></div>
</form>