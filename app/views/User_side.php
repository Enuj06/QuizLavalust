<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Side</title>
</head>
<body>
    <h2>User form</h2>

     <php foreach ($data as $info) : ?>
    <form>
        <h2>quiz</h2>           
        <p><= $info['quiz_title']; ?></p>
    <php endforeach; ?>
/body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .quiz-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .question {
            margin-bottom: 10px;
        }

        .options label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="quiz-container">
    <h1>HTML Quiz</h1>

    <div class="question">
        <p>1. What does HTML stand for?</p>
        <div class="options">
            <label><input type="radio" name="q1" value="a"> Hyper Text Markup Language</label>
            <label><input type="radio" name="q1" value="b"> Hyperlink and Text Markup Language</label>
            <label><input type="radio" name="q1" value="c"> Hyper Transfer Markup Language</label>
        </div>
    </div>

    <div class="question">
        <p>2. Which tag is used to create a hyperlink in HTML?</p>
        <div class="options">
            <label><input type="radio" name="q2" value="a"> &lt;a&gt;</label>
            <label><input type="radio" name="q2" value="b"> &lt;link&gt;</label>
            <label><input type="radio" name="q2" value="c"> &lt;url&gt;</label>
        </div>
    </div>

    <!-- Add more questions as needed -->

    <button onclick="submitQuiz()">Submit</button>
</div>

<script>
    function submitQuiz() {
        // You can implement scoring or further actions here
        alert('Quiz submitted!');
    }
</script>

</body>
</html>
