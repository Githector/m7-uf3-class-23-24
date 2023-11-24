<form class="col-11 col-md-7 col-lg-5 col-xl-4 p-3 my-4 mx-auto border" action="/uf/store" method="post">
    <h2>New UF (MP<?= $params['mp']['mp_number']?> - <?= $params['mp']['mp_name']?> )</h2>
   <div class="mb-3">
     <label for="uf_number" class="form-label"># UF</label>
     <input type="text"
       class="form-control" name="uf_number" id="uf_number" aria-describedby="helpId" placeholder="">

   </div>

   <div class="mb-3">
     <label for="uf_name" class="form-label">UF Name</label>
     <input type="text"
       class="form-control" name="uf_name" id="uf_name" aria-describedby="helpId" placeholder="">

   </div>

   <div class="mb-3">
     <label for="uf_hours" class="form-label">UF NHours</label>
     <input type="text"
       class="form-control" name="uf_hours" id="uf_hours" aria-describedby="helpId" placeholder="">

   </div>

   <input type="hidden" name="mp_id" value="<?= $params['mp']['id'] ?>">

   <button type="submit" name="sub_save_mp" class="btn btn-primary">Save!</button>


</form>

<div class="quali col-11 col-lg-10 mx-auto mt-4">
            <table class="table">
                <h2>Ufs List</h2>
                <?php
                if (isset($params['ufs'])) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">Id (DB)</th>
                            <th scope="col">Number/th>
                            <th scope="col">Name</th>
                            <th scope="col">Hours</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($params['ufs'] as $uf) {

                        ?>

                            <tr>
                                <td><?php echo $uf['id'] ?></td>
                                <td><?php echo $uf['uf_number'] ?></td>
                                <td><?php echo $uf['uf_name'] ?></td>
                                <td><?php echo $uf['uf_hours'] ?></td>
                                <td>
                                <a href="/uf/edit/<?php echo $uf['id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="/uf/destroy/<?php echo $uf['id'] ?>/?mp_id=<?= $uf['mp_id']?>" class="btn btn-danger">Remove</a>
                          
                            </td>
                            </tr>

                    <?php
                        }
                    }else{
                        echo "<h2>No Ufs yet</h2>";
                    } 

                    ?>
                    </tbody>
            </table>

        </div>