<?php

include('header.php');
include('footer.php');

?>

<div class="col-10">




<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#staticBackdrop">
  Add Team Mates
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Team Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
                <label>Full Name</label><br />
                <select class="form-control" name="nature_of_appointment" >
                <option value="">Select One</option>
                    <option>New</option>
                    <option>Old</option>
                </select>
            </p>
            <p>
            <label>Department (Track)</label><br />
                <select class="form-control" name="department" >
                    <option value="">Select One</option>
                    <option>Frontend(FE)</option>
                    <option>Backend (BE)</option>
                    <option>Design</option>
                    </select>
                </p>

                <label>Time of Appointment</label><br />
                <input type="time" class="form-control" id="timepicker" name="time_of_appointment"/>  
            </p>
            <p>
                <label>Date of Appointment</label><br />
                <input type="date" class="form-control" name="date_of_appointment" id="datepicker"/>
                
            </p>
            
            <div class="md-form">
          <label data-error="wrong" data-success="right" for="form">Complaints</label>
          <textarea 
          
          <?php              
            if(isset($_SESSION['complaint'])){
                echo "value=" . $_SESSION['complaint'];                                                             
            }            
          
          ?>
          type="text" id="form" class="md-textarea form-control" name="complaint" rows="4"></textarea>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>