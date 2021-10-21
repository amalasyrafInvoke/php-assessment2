<html>

<head>
  <title>PHP Assessment 2</title>

  <style>
    .container {
      border: 1px solid black;
      margin: 0 auto;
      width: 700px;
      height: 90%;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .container > * {
      margin: 0 1rem;
    }
  </style>
</head>

<body>
  <h1>Question 1</h1>

  <div class="container">
    <form action="question1.php" method="POST">
      <!-- Form for user1 -->
      <div class="user" id="user-1">
        <h3>User 1</h3>
        <div>
          <label for="user1-one">Value 1:</label>
          <input type="number" name="user1-val1" id="user1-val1">
        </div>
        <div>
          <label for="user1-one">Value 2:</label>
          <input type="number" name="user1-val2" id="user1-val2">
        </div>
        <div>
          <label for="user1-one">Value 3:</label>
          <input type="number" name="user1-val3" id="user1-val3">
        </div>
        <div>
          <label for="user1-one">Value 4:</label>
          <input type="number" name="user1-val4" id="user1-val4">
        </div>
        <div>
          <label for="user1-one">Value 5:</label>
          <input type="number" name="user1-val5" id="user1-val5">
        </div>
      </div>

      <!-- Form for user 2 -->
      <div class="user" id="user-2">
        <h3>User 2</h3>
        <div>
          <label for="user2-one">Value 1:</label>
          <input type="number" name="user2-val1" id="user2-val1">
        </div>
        <div>
          <label for="user2-one">Value 2:</label>
          <input type="number" name="user2-val2" id="user2-val2">
        </div>
        <div>
          <label for="user2-one">Value 3:</label>
          <input type="number" name="user2-val3" id="user2-val3">
        </div>
        <div>
          <label for="user2-one">Value 4:</label>
          <input type="number" name="user2-val4" id="user2-val4">
        </div>
        <div>
          <label for="user2-one">Value 5:</label>
          <input type="number" name="user2-val5" id="user2-val5">
        </div>
      </div>

      <!-- Form for user 3 -->
      <div class="user" id="user-3">
        <h3>User 3</h3>
        <div>
          <label for="user3-one">Value 1:</label>
          <input type="number" name="user3-val1" id="user3-val1">
        </div>
        <div>
          <label for="user3-one">Value 2:</label>
          <input type="number" name="user3-val2" id="user3-val2">
        </div>
        <div>
          <label for="user3-one">Value 3:</label>
          <input type="number" name="user3-val3" id="user3-val3">
        </div>
        <div>
          <label for="user3-one">Value 4:</label>
          <input type="number" name="user3-val4" id="user3-val4">
        </div>
        <div>
          <label for="user3-one">Value 5:</label>
          <input type="number" name="user3-val5" id="user3-val5">
        </div>
      </div>

      <input style="margin-top: 1rem;" type="submit" name="submit" id="submit-btn" value="Submit">
    </form>

    <div id="displayInfo">
      <h2>hey</h2>

      <?php
        // $user1Value = [];
        // $user2Value = [];
        // $user3Value = [];
        echo $_POST['user1-val2'];
        echo $_POST['user1-val4'];
        echo $_POST['user1-val5'];

        function getUser1() {
          $user1Value = array();
          array_push($user1Value, $_POST['user1-val1'], $_POST['user1-val2'], $_POST['user1-val3'], $_POST['user1-val4'], $_POST['user1-val5']);
          var_dump($user1Value);
        }
      ?>
    </div>
  </div>
</body>

</html>