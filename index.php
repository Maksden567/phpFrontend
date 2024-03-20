<?php 

require('components/modalDelete.php');
require('components/addModal.php') ;
require('components/updateModal.php'); 





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
</head>

<body class="body">
    <div class="wrapper">
        <div class="header">
            <button type="button" class="btn btn-primary btn_addUser" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add</button>
            <select class="form-select" aria-label="Default select example">
                <option selected>Please Select</option>
                <option value="setActive">Set Active</option>
                <option value="setNotActive">Set Not Active</option>
                <option value="delete">Delete</option>
            </select>
            <button type="button" class="btn btn-primary btn_ok">OK</button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="col1"> <input type="checkbox" class="input_main"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="col_actions">Actions</th>
                </tr>
            </thead>
            <tbody class="bodyTable">
                
            </tbody>
        </table>
        <div class="footer">
            <button type="button" class="btn btn-primary btn_addUser" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Add</button>
            <select class="form-select" aria-label="Default select example">
                <option selected>Please Select</option>
                <option value="setActive">Set Active</option>
                <option value="setNotActive">Set Not Active</option>
                <option value="delete">Delete</option>
            </select>
            <button type="button" class="btn btn-primary btn_ok">OK</button>
        </div>

    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="./js/main.js"></script>
</body>

</html>