<?php
if (!isset($params['init_race']) and isset($params['finish_race'])) {
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

<form action="/race/runner_finish" method="post" class="col-10 col-md-7 col-lg-5 col-xl-4 mx-auto mt-4 border p-3 bg-light">
        <h2>Race started!!!!</h2>
        <div class="mb-3">
            <label for="number" class="form-label">Arrival number:</label>
            <input type="number" class="form-control" name="number" id="race_name" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Input runner number!</small>
        </div>
        <button type="submit" class="btn btn-primary">Save!</button>
    </form>


<?php
}
//nset($params['started']);
?>

