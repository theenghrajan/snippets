```php

<div class="form-group">
  <label>Name</label>
  [text* your-name class:form-control placeholder "Enter your name..."] 
</div><!--/.form-group-->
<div class="form-group one-half">
  <label>Email address</label>
  [email* your-email class:form-control placeholder "Enter your email address..."] 
</div><!--/.form-group-->
<div class="form-group one-half">
  <label>Phone number</label>
  [tel* tel-number class:form-control placeholder "Enter your phone number..."]
</div><!--/.form-group-->   
<div class="form-group one-half">
  <label>STATE</label>
  [select* state class:stateSelector class:form-control include_blank "Arizona" "California" "Colorado" "New Mexico"]
</div><!--/.form-group--> 
<div class="form-group one-half">
  <label>ZIP CODE</label>
  [text* zip-code class:form-control placeholder "Enter zip code..."] 
</div><!--/.form-group--> 
<div class="form-group">
  <label>HOW CAN WE HELP</label>
  [textarea* your-message class:form-control placeholder "Enter your message..."] 
</div><!--/.form-group--> 
<div class='check-block form-group'>
  [checkbox* checkbox-1 use_label_element "I ALLOW THIS WEBSITE TO STORE MY SUBMISSION SO THEY CAN RESPOND TO MY INQUIRY."]
</div><!--/.form-group--> 
<div class='check-block form-group'>
  <label>By providing your information or contacting us, you are agreeing to receive text messages from our business.</label>
</div><!--/.form-group--> 
<div class='btn-block'>
  [submit class:btn "Submit"]
</div><!--/.btn-block--> 




/* This is the working one*/
[text* your-name placeholder "Name"] 
[email* your-email placeholder "Email"] 
[tel* tel-number placeholder "Phone"]
<div class='form-item-box flex'>
  [select* state class:stateSelector include_blank "Arizona" "California" "Colorado" "New Mexico"]
  [text* zip-code placeholder "Zip code"] 
</div>
  [text* your-message placeholder "How can we help?"] 

<div class='check-block'>
  [checkbox* checkbox-1 use_label_element "I allow this website to store my submission so they can respond to my inquiry."]
</div>
<div class='check-block form-group'>
  <label> By providing your information or contacting us, you are agreeing to receive text messages from our business.</label>
</div>
<div class='btn-inner flex'>
  <div class='btn-block'>
    [submit class:btn "Submit"]
  </div>
  <div id="form_phone_act"></div>
</div>

```