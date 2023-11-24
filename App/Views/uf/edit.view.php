<form class="col-11 col-md-7 col-lg-5 col-xl-4 p-3 my-4 mx-auto border" action="/uf/update/<?= $params['uf']['id'] ?>" method="post">
    <h2>Edit UF</h2>
   <div class="mb-3">
     <label for="uf_number" class="form-label"># UF</label>
     <input type="text" value="<?php echo $params['uf']['uf_number'] ?? null ?>"
       class="form-control" name="uf_number" id="uf_number" aria-describedby="helpId" placeholder="">

   </div>

   <div class="mb-3">
     <label for="uf_name" class="form-label">UF Name</label>
     <input type="text" value="<?php echo $params['uf']['uf_name'] ?? null ?>"
       class="form-control" name="uf_name" id="uf_name" aria-describedby="helpId" placeholder="">

   </div>

   <div class="mb-3">
     <label for="uf_hours" class="form-label">UF NHours</label>
     <input type="text" value="<?php echo $params['uf']['uf_hours'] ?? null ?>"
       class="form-control" name="uf_hours" id="uf_hours" aria-describedby="helpId" placeholder="">

   </div>

   <input type="hidden" name="mp_id" value="<?= $params['uf']['mp_id'] ?>">

   <button type="submit" name="sub_save_mp" class="btn btn-primary">Save!</button>


</form>