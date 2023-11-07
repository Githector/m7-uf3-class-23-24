<form action="/runner/store" method="post" class="col-11 col-md-9 col-lg-6 col-xl-5 p-4 mt-4 mx-auto border">

    <h2 class="mt-2">New Runner</h2>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Surname</label>
        <input type="text" class="form-control" name="surname" id="surname" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <label for="birthdate" class="form-label">Birhdate</label>
        <input type="date" class="form-control" name="birthdate" id="birthdate" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select form-select-lg" name="gender" id="gender">
            <option selected>Select one</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="club" class="form-label">Club</label>
        <input type="text" class="form-control" name="club" id="club" aria-describedby="helpId" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary mb-2">Save</button>
    <button type="reset" class="btn btn-danger mb-2">Reset</button>
    <?php 
    if(isset($params['flash'])){
        echo "<div class='alert alert-success' role='alert'>".$params['flash']."</div>";
        unset($params['flash']);
    }
    ?>
    
</form>

<div class="list_runners col-11 col-lg-10 mx-auto mt-4">
    <table class="table">
        <h2>Runner's list</h2>
        <?php 
                if (isset($params['runners'])){
        ?>
        
        <thead>
            <tr>
                <th scope="col">#Number</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Gender</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
        <?php 

            foreach ($params['runners'] as $runner) {
           
        ?>
            
            <tr>
                <th scope="row"><?php echo $runner['number'] ?></th>
                <td><?php echo $runner['name'] ?></td>
                <td><?php echo $runner['surname'] ?></td>
                <td><?php echo $runner['gender'] ?></td>
                <td><?php echo $runner['category'] ?></td>
            </tr>

        <?php
        }}else{
            echo "<div class='alert alert-danger' role='alert'>No runners found</div>";
        }
    
        ?>
        </tbody>
    </table>
</div>