<form class="col-11 col-md-7 col-lg-5 col-xl-4 p-3 my-4 mx-auto border" action="/mp/update/<?php echo $params['mp']['id'] ?>" method="post">
    <h2>Update MP</h2>
   <div class="mb-3">
     <label for="mp_number" class="form-label"># MP</label>
     <input type="text" value="<?php echo $params['mp']['mp_number'] ?? null ?>"
       class="form-control" name="mp_number" id="mp_number" aria-describedby="helpId" placeholder="">

   </div>

   <div class="mb-3">
     <label for="mp_name" class="form-label">Mp Name</label>
     <input type="text" value="<?php echo $params['mp']['mp_name'] ?? null ?>"
       class="form-control" name="mp_name" id="mp_name" aria-describedby="helpId" placeholder="">

   </div>

   <button type="submit" name="sub_edit_mp" class="btn btn-primary">Save!</button>


</form>