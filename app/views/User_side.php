<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Quiz</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h3>The big knowledge test!</h3>
        <p>How good is your general knowledge?</p>
    </div>

    <!-- Question 1 -->
    <div class="card border-info mb-4">
        <div class="d-flex justify-content-between align-items-center card-header bg-info text-white" id="h1">
            <span>Question 1</span>
            <button type="button" data-toggle="collapse" data-target="#q1" aria-expanded="false" aria-controls="q1" class="btn btn-outline-light">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>
        <div id="q1" class="collapse show" aria-labelledby="h1">
            <div class="card-body">
                <p>Philology is the</p>
                <!-- Options for Question 1 -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1_r1" value="r1">
                    <label class="form-check-label" for="q1_r1">
                        study of bones
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1_r2" value="r2">
                    <label class="form-check-label" for="q1_r2">
                        study of muscles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1_r3" value="r3">
                    <label class="form-check-label" for="q1_r3">
                        study of architecture
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1_r4" value="r4">
                    <label class="form-check-label" for="q1_r4">
                        science of languages
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Repeat the structure for other questions -->

    <h3>Result</h3>

    <div class="card">
        <div class="card-body">
            <p id="result">No result.</p>
            <div class="progress mb-2">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <button type="button" class="btn btn-success">Update</button>
        </div>
    </div>

</div>

<!-- Bootstrap JS dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
