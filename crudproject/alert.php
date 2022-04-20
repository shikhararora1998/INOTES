<?php
if($INSERT){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>SUCCESS!</strong> Record has been inserted successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }

     
    if($UPDATE){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>SUCCESS!</strong> Note has been Updated successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }
    
    
    if($DELETE){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>SUCCESS!</strong> Note has been Deleted successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }
    ?>