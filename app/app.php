<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/job-board.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "
        <!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <title>Create a job posting</title>
        </head>
        <body>
            <div class='container'>
                <h1>Tell us about the job:</h1>
                <form action='/view_job_board'>
                    <div class='form-group'>
                        <label for='title'>Enter the title:</label>
                        <input id='title' name='title' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                        <label for='description'>Enter the description:</label>
                        <input id='description' name='description' class='form-control' type='text'>
                    </div>
                    <div class='form-group'>
                        <label for='contact_info'>Enter the contact:</label>
                        <input id='contact_info' name='contact_info' class='form-control' type='text'>
                    </div>
                    <button type='submit' class='btn-danger'>Create!</button>
                </form>
            </div>
        </body>
        </html>
        ";
    });

    $app->get("/view_job_board", function() {
        $my_posting = new JobOpening($_GET['title'], $_GET['description'], $_GET['contact_info']);
        return "
            <!DOCTYPE html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <title>View Le'Jobs</title>
            </head>
            <body>
                <div class='container'>
                    <h2>Job Post</h2>
                    <h3>Title:</h3>
                    <p>" . $my_posting->getTitle() . "</p>
                    <h3>Description:</h3>
                    <p>" . $my_posting->getDescription() . "</p>
                    <h3>Contact Info:</h3>
                    <p>" . $my_posting->getContactInfo() . "</p>
                </div>
            </body>
        ";
    });

    return $app;
?>
