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

    <form id="quizForm" action="/user_result" method="post" onsubmit="return submitQuiz()">
        <?php foreach ($questions as $question): ?>
            <div class="question">
                <p><?= $question['quiz_question'] ?></p>
                <label for="answer<?= $question['id'] ?>">Your Answer:</label>
                <input type="text" id="answer<?= $question['id'] ?>" name="answers[<?= $question['id'] ?>]" placeholder="Type your answer here">
                <input type="hidden" id="correct_answer<?= $question['id'] ?>" value="<?= $question['quiz_answer'] ?>">
            </div>
        <?php endforeach; ?>
        <button type="submit">Submit</button>
    </form>
</div>

<script>
    function submitQuiz() {
        var questions = document.querySelectorAll('.question');
        var allCorrect = true;

        questions.forEach(function(question) {
            var userAnswer = question.querySelector('input[type="text"]').value.trim();
            var correctAnswer = question.querySelector('input[type="hidden"]').value.trim();

            if (userAnswer.toLowerCase() !== correctAnswer.toLowerCase()) {
                allCorrect = false;
            }
        });

        if (!allCorrect) {
            alert('Some answers are incorrect. Please review your answers and try again.');
            return false; 
        } else {
            alert('All answers are correct!');
            return true; 
        }
    }
</script>

</body>
</html>
