<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Quiz Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('../public/images/black.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color:white;
        }

        .btnadd {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .glow {
            animation: glowing 3s infinite;
        }

        @keyframes glowing {
            0% {
                background-color: #ffcc00; /* Initial color */
                box-shadow: 0 0 10px #ffcc00, 0 0 20px #ffcc00, 0 0 30px #ffcc00;
            }
            50% {
                background-color: #ff9900; /* Mid color */
                box-shadow: 0 0 20px #ff9900, 0 0 30px #ff9900, 0 0 40px #ff9900;
            }
            100% {
                background-color: #ffcc00; /* Final color */
                box-shadow: 0 0 10px #ffcc00, 0 0 20px #ffcc00, 0 0 30px #ffcc00;
            }
        }

        .header {
            background-color: brown;
            padding: 20px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .container {
            padding: 20px;
        }

        .subcomment {
            font-size: 15px;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        .answer-container {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .btnadd{

        }
    </style>
</head>

<body>

<div class="header">
        <h1 style="text-align: center">Create Your Own Quiz!</h1>
        <button onclick="addForm()" class="btnadd">Add Question</button>    
    </div>

    <div class="container">
        <form method="post" action="<?= site_url('create_quizzes');?>" id="formContainer">
        <h2>Quiz Title:</h2>    
        <textarea id="quiz_title" name="quiz_title" placeholder="Write Quiz Title" required></textarea><br>
        <h2>Note:<p class="subcomment">(Optional)</p></h2>
        <textarea id="note" name="note" placeholder="Write your note.."></textarea><br>
            <label for="question">Question</label>
            <input type="text" name="question" class="question" placeholder="Enter question..." required>
            <label for="selecttype">Answer Type</label>
            <select name="selecttype" class="formType" onchange="showAnswerFields(this)" required>
                <option>--Select Option--</option>
                <option value="multiplechoice">Multiple Choice</option>
                <option value="identification">Identification</option>
                <option value="checkbox">Check Box</option>
            </select>

            <div class="answer-container" id="answerContainer">
            </div><hr>/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/<hr>

            <button type="submit" class="btn btn-primary">Save Quiz</button>
        </form>
    </div>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Question Title</th>
      <th scope="col">Note</th>
      <th scope="col">Question</th>
      <th scope="col">Answer</th>
    </tr>
  </thead>
  <?php foreach ($data as $info) : ?>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Crong</td>
      <td>Baby</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>calories</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Answer</td>
    </tr>
  </tbody>
</table>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    let formCounter = 1;

    function addForm() {
        var original = document.querySelector('form');
        var cloned = original.cloneNode(true);

        // Update the name attributes to avoid conflicts
        cloned.querySelectorAll('[name]').forEach(element => {
            element.name = element.name + formCounter;
        });

        formCounter++;

        // Remove the previous "Save Quiz" button
        const prevSaveQuizButton = document.querySelector('.btn');
        if (prevSaveQuizButton) {
            prevSaveQuizButton.parentNode.removeChild(prevSaveQuizButton);
        }

        document.getElementById('formContainer').appendChild(cloned);
    }

    function showAnswerFields(selectElement) {
        var answerContainer = selectElement.parentNode.querySelector('.answer-container');
        var selectedType = selectElement.value;

        // Reset the answer container
        answerContainer.innerHTML = '';

        // Show the answer container for the selected type
        if (selectedType !== '--Select Option--') {
            answerContainer.style.display = 'block';

            // Add specific answer fields based on the selected type
            if (selectedType === 'multiplechoice') {
                answerContainer.innerHTML = '<label for="answer">Options (comma-separated)</label>' +
                    '<input type="text" name="answer" placeholder="Option 1, Option 2, ...">';
            } else if (selectedType === 'identification') {
                answerContainer.innerHTML = '<label for="answer">Correct Answer</label>' +
                    '<input type="text" name="answer" placeholder="Correct Answer">';
            } else if (selectedType === 'checkbox') {
                answerContainer.innerHTML = '<label for="answer">Options (comma-separated)</label>' +
                    '<input type="text" name="answer" placeholder="Option 1, Option 2, ...">';
            }
        } else {
            answerContainer.style.display = 'none';
        }
    }

    setInterval(function () {
        var glowButton = document.getElementById('glowButton');
        glowButton.classList.add('glow');

        // Remove the 'glow' class after the animation duration
        setTimeout(function () {
            glowButton.classList.remove('glow');
        }, 3000);
    }, 6000);
</script>
</body>

</html>