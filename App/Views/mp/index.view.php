<form class="col-11 col-md-7 col-lg-5 col-xl-4 p-3 my-4 mx-auto border" action="/mp/store" method="post">
    <h2>New MP</h2>
   <div class="mb-3">
     <label for="mp_number" class="form-label"># MP</label>
     <input type="text"
       class="form-control" name="mp_number" id="mp_number" aria-describedby="helpId" placeholder="">

   </div>

   <div class="mb-3">
     <label for="mp_name" class="form-label">Mp Name</label>
     <input type="text"
       class="form-control" name="mp_name" id="mp_name" aria-describedby="helpId" placeholder="">

   </div>

   <button type="submit" name="sub_save_mp" class="btn btn-primary">Save!</button>


</form>

<div class="quali col-11 col-lg-10 mx-auto mt-4">
            <table class="table">
                <h2>Mps List</h2>
                <?php
                if (isset($params['mps'])) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">Id (DB)</th>
                            <th scope="col">Number/th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($params['mps'] as $mp) {

                        ?>

                            <tr>
                                <td><?php echo $mp['id'] ?></td>
                                <td><?php echo $mp['mp_number'] ?></td>
                                <td><?php echo $mp['mp_name'] ?></td>
                                <td>
                                <a href="/mp/edit/<?php echo $mp['id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="/mp/destroy/<?php echo $mp['id'] ?>" class="btn btn-danger">Remove</a>
                                <a href="/uf/index/<?php echo $mp['id'] ?>" class="btn btn-success">Add Uf</a>
                            </td>
                            </tr>

                    <?php
                        }
                    }else{
                        echo "<h2>No Mps yet</h2>";
                    } 

                    ?>
                    </tbody>
            </table>

        </div>
