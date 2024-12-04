<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Quiz Seputar Indonesia</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>
    <div class="container">
        <div id="homeScreen" class="screen active">
            <h1>Selamat Datang di Quiz Seputar Indonesia</h1>
            <p>Quiz ini menguji pengetahuan kamu seputar Indonesia!</p>
            <button class="btn" onclick="showScreen('playerDataScreen')">Start Quiz</button>
        </div>

        <div id="playerDataScreen" class="screen">
            <h2>Masukan identitas dan NIM kamu</h2>
            <input type="text" id="playerName" placeholder="Nama">
            <input type="text" id="playerNIM" placeholder="NIM">
            <button class="btn" onclick="startQuiz()">Mulai Quiz</button>
        </div>

        <div id="quizScreen" class="screen">
            <div id="timer" class="timer">30</div>

            <div class="progress-info">
                Completed: <span id="completedQuestions">0</span>/<span id="totalQuestions">0</span>
            </div>

            <div id="questionNav" class="question-nav"></div>

            <div id="questionContainer"></div>

            <button onclick="previousQuestion()" class="btn">Sebelumnya</button>
            <button onclick="nextQuestion()" class="btn">Selanjutnya</button>
            <button onclick="submitQuiz()" class="btn">Submit Quiz</button>
        </div>

        <div id="resultsScreen" class="screen">
            <h2>Quiz Results</h2>
            <div id="playerInfo"></div>
            <div id="scoreBreakdown"></div>
            <div id="totalScore"></div>
            <button onclick="restartQuiz()" class="btn">Mulai Kembali Quiznya</button>
        </div>
    </div>

    <script src="script.php"></script>
</body>
</html>