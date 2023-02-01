<?php
$peoples = file("peoples.csv");

$data = [];
foreach ($peoples as $line) {
    $data[] = str_getcsv($line);
}

if ($_POST['country']) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if ($people[4] == $_POST['country']) {
            $searchPeoples[] = $people;
        }
    }
} elseif ($_POST['name']) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if ($people[0] == $_POST['name']) {
            $searchPeoples[] = $people;
        }
    }
} else {
    $searchPeoples = $data;
}

/*if ($_POST['name'] && ($_POST['checkbox'] == 1)) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if ($people[4] == $_POST['country']) {
            $searchPeoples[] = $people;
        }
    }
} elseif ($_POST['name']) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if (in_array($_POST['name'], $data)) {
            $searchPeoples[] = $people;
        }
    }
} else {
    $searchPeoples[] = $data;
}*/


/*if ($_POST['name']) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if (empty($_POST['checkbox']) && ($isContains = str_contains($people[0], $_POST['name']))) {
            $searchPeoples[] = $people;
        } elseif ($people[0] == $_POST['name']) {
            $searchPeoples[] = $people;
        } else {
            $searchPeoples[] = $people;
        }
    }
}*/

/*if (($_POST['country']) && $_POST['name']) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if (($people[4] == $_POST['country']) & ($people[0] == $_POST['name'])) {
            $searchPeoples[] = $people;
        }
    }
} elseif ($_POST['country']) {
    $searchPeoples = [];
    foreach ($data as $people) {
        if ($people[4] == $_POST['country']) {
            $searchPeoples[] = $people;
        }
    }
} elseif ($_POST['name']) {
      $searchPeoples = [];
    foreach ($data as $people) {
        if ($people[0] == $_POST['name']) {
            $searchPeoples[] = $people;
        }
    }
} else {
    $searchPeoples = $data;
}*/

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Codes</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
<!--               <div class="form-group">
            <label>Enter country</label>
            <select  name="country" class="form-control">
            <?php /*foreach ($data as $key => $country) : */?>
                <?php /*if ($_POST['country'] == $key ) : */?>
                <option selected value="<?php /*= $key */?>"><?php /*= $country[4] */?></option>
                <?php /*else: */?>
                <option value="<?php /*= $key */?>"><?php /*= $country[4] */?></option>
                <?php /*endif; */?>
                <?php /*endforeach; */?>
            </select>
        </div>-->
        <div class="form-group">
            <label>Enter country</label>
            <input type="text" name="country" class="form-control" placeholder="Enter country">
        </div>
        <div class="form-group">
            <label>Enter name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-check">
            <input class="form-check-input" name="checkbox" type="checkbox" value="1">
            <label class="form-check-label">
               Complete coincidence
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">Region</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchPeoples as $people) : ?>
            <tr>
                <th scope="row"><?= $people[0] ?></th>
                <td><?= $people[1] ?></td>
                <td><?= $people[2] ?></td>
                <td><?= $people[3] ?></td>
                <td><?= $people[4] ?></td>
                <td><?= $people[5] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>