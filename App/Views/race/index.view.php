<?php
if (!isset($params['race'])) {
?>

    <form action="/race/start" method="post" class="col-10 col-md-7 col-lg-5 col-xl-4 mx-auto mt-4 border p-3 bg-light">
        <h2>Race!</h2>
        <div class="mb-3">
            <label for="race_name" class="form-label">Name</label>
            <input type="text" class="form-control" name="race_name" id="race_name" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Insert race name and click start!</small>
        </div>
        <button type="submit" class="btn btn-primary">Start!</button>
    </form>

<?php
} else {
?>

    <form action="/race/arrival" method="post" class="col-10 col-md-7 col-lg-5 col-xl-4 mx-auto mt-4 border p-3 bg-light">
        <h2>Race started!!!!</h2>
        <div class="mb-3">
            <label for="number" class="form-label">Arrival number:</label>
            <input type="number" class="form-control" name="number" id="race_name" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Input runner number!</small>
        </div>
        <button type="submit" class="btn btn-primary">Save!</button>
    </form>

        <div class="quali col-11 col-lg-10 mx-auto mt-4">
            <table class="table">
                <h2>Arrivals (<?php echo $params['race']['name_race']?> Race)</h2>
                <?php
                if (isset($params['arrivals'])) {
                ?>

                    <thead>
                        <tr>
                            <th scope="col">Position</th>
                            <th scope="col">#Number</th>
                            <th scope="col">Time</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Age</th>
                            <th scope="col">Category</th>
                            <th scope="col">Club</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($params['arrivals'] as $arrival) {

                        ?>

                            <tr>
                                <th scope="row"><?php echo $i++ ?></th>
                                <th scope="row"><?php echo $arrival['runner']['number'] ?></th>
                                <th scope="row"><?php echo $arrival['time'] ?></th>
                                <td><?php echo $arrival['runner']['name'] ?></td>
                                <td><?php echo $arrival['runner']['surname'] ?></td>
                                <td><?php echo $arrival['runner']['gender'] ?></td>
                                <td><?php echo $arrival['runner']['age'] ?></td>
                                <td><?php echo $arrival['runner']['category'] ?></td>
                                <td><?php echo $arrival['runner']['club'] ?></td>
                            </tr>

                    <?php
                        }
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>No one has arrived yet.</div>";
                    }

                    ?>
                    </tbody>
            </table>
            <a name="finish" id="" class="btn btn-success" href="/race/finish" role="button">Finish</a>
        </div>





<?php
}



?>