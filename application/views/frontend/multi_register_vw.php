<?php $this->load->view('frontend/include/header');?>

<div class="about_main clearfix">
  <section id="about">
    <img src="<?php echo base_url('assets/frontend/img/mr1.jpeg')?>" width="100%" height="500px">
  </section>
  <section id="about_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"></div>
      </div>
    </div>
  </section>
  <section id="about_bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"></div>
      </div>
    </div>
  </section>
</div>            

<section id="about_heading" class="about_register">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about_heading">
          <h5><a href="#">Home</a> <span>//</span>Complete Profile</h5>
          <h1>Complete Profile</span> </h1>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
<form id="regForm" action="#">
  <h1>Profile info:</h1>
  <!-- One "tab" for each step in the form: -->
 
   <div class="tab">Professional Information:
    <div class="form-row">
      <div class="col-md-6 form-group">
        <label style="font-size: 18px;">Education:</label>
        <input placeholder="Education(Ex. BE(IT))" name="education" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label style="font-size: 18px;">Employed In:</label>
        <div class="form-group">
          <select class="form-control" id="sel1">
          <option>Select employment</option>
          <option>Self-employed</option>
          <option>Government</option>
          <option>Private-sector</option>
          <option>Other</option>
          </select>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 form-group">      
        <label style="font-size: 18px;">Occupation:</label>
        <input placeholder="Occupation"  name="occupation" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label style="font-size: 18px;">Annual Income:</label>
        <input placeholder="Annual Income" name="annual_income" class="form-control">
      </div>
    </div>
  </div> 

  <div class="tab step2">About myself:
    <div class="row">
      <div class="col-md-4 form-group">
        <label style="font-size: 18px;">Age:</label>
        <input placeholder="Age" name="age" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label style="font-size: 18px;">Height:</label>
        <input placeholder="Height" name="height" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label style="font-size: 18px;">Weight:</label>
        <input placeholder="Weight" name="weight" class="form-control">
      </div>
    </div><!-- FIrst div complete  -->
    <div class="row">
      <div class="col-md-4 form-group">      
        <label style="font-size: 18px;">Body Type:</label>
        <input placeholder="Body Type" name="body_type" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label style="font-size: 18px;">Complextion:</label>
        <input placeholder="Complextion" name="complextion" class="form-control">
      </div>
      <div class="col-md-4 form-group">      
        <label style="font-size: 18px;">Physical status:</label>
        <input placeholder="Physical status" name="physical_status" class="form-control">
      </div>
    </div><!-- second div complete  -->
    <div class="row">
      <div class="col-md-4">
          <label style="font-size: 18px;">Eating habits:</label>
          <div class="form-check-inline">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="vegeterian" checked>vegeterian
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">non-vegeterian
          </label>
        </div>
      </div>
      <div class="col-md-4">
      <label style="font-size: 18px;">Drinking habits:</label>
      <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="vegeterian" checked>No
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Yes
      </label>
    </div>
    </div>
    <div class="col-md-4">
      <label style="font-size: 18px;">Smoking habits:</label>
      <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="vegeterian" checked>No
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Yes
      </label>
    </div>
    </div>
  </div>
  
    <div class="row">
      <div class="col-md-12 form-group">      
        <label style="font-size: 18px;">Something interesting about myself:</label>
        <textarea rows="5" class="form-control" placeholder="Something interesting about myself"></textarea>
      </div>
    </div>
  </div> <!-- second tab complete -->



  <div class="tab mb-3">Religion Information:
    <div class="row">
      <div class="col-md-6 form-group">
        <label style="font-size: 18px;">Subcast(If any):</label>
        <input placeholder="Subcast(If any)" name="subcast" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label style="font-size: 18px;">Gothram:</label>
        <input placeholder="Gothram" name="gothram" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group">      
        <label style="font-size: 18px;">Zodiac sign:</label>
        <div class="form-group">
          <select class="form-control" id="sel1">
          <option>Select Zodiac sign</option>
          <option>Aries</option>                   
          <option>Taurus</option>
          <option>Gemini</option>
          <option>Cancer</option>
          <option>Leo</option>
          <option>Virgo</option>
          <option>Libra</option>
          <option>Scorpio</option>
          <option>Sagittarius</option>
          <option>Capricorn</option>
          <option>Aquarius</option>
          <option>Pisces</option>
          </select>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label style="font-size: 18px;">Dosh:</label>
        <input placeholder="Dosh" name="dosh" class="form-control">
      </div>
    </div>
  </div>
  <div class="tab mb-3">Family Details:
    <div class="row">
      <div class="col-md-4 form-group">
        <label style="font-size: 18px;">Family values:</label>
        <input placeholder="Family Values" name="family_values" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label style="font-size: 18px;">Family Type:</label>
        <input placeholder="Family Type" name="family_type" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label style="font-size: 18px;">Family status:</label>
        <input placeholder="Family Status" name="family_status" class="form-control">
      </div>
    </div><!-- FIrst div complete -->
    <div class="row">
      <div class="col-md-4 form-group">      
        <label style="font-size: 18px;">Father status:</label>
        <input placeholder="Father Status" name="father_status" class="form-control">
      </div>
      <div class="col-md-4 form-group">      
        <label style="font-size: 18px;">Parent contact no:</label>
        <input placeholder="Parent contact no" name="contact_no" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label style="font-size: 18px;">Family location:</label>
        <input placeholder="Family Location" name="family_location" class="form-control">
      </div>
    </div><!-- second div complete -->
    <div class="row">
      <div class="col-md-12 form-group">      
        <label style="font-size: 18px;">Mother tounge:</label>
        <input placeholder="Mother toung" name="mother_toung" class="form-control">
      </div>
    </div><!-- third div complete -->
    <div class="row">
      <div class="col-md-12 form-group">      
        <label style="font-size: 18px;">About my family:</label>
        <textarea rows="5" class="form-control" placeholder="About my family"></textarea>
      </div>
    </div><!-- fourth div complete -->
  </div>
  <div ><!-- style="overflow:auto;" -->
    <div style="text-align: center; ">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:70px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>

<?php $this->load->view('frontend/include/footer');?>