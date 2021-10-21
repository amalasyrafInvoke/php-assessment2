<html>
<head>
  <title>Question 2</title>
  <style>
    #class-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    #class-container > * {
      margin: 0.5rem 0;
    }
  </style>
</head>
<body>
  <form id="class-container" action="question2-action.php" method="POST">
    <label for="name">Enter Employee Name:</label>
    <input type="text" name="name" id="name">
    <label for="dob">Enter Date of Birth:</label>
    <input type="date" name="dob" id="dob">
    <label for="username">Enter Username:</label>
    <input type="text" name="username" id="username">
    <label for="password">Enter Password:</label>
    <input type="password" name="password" id="password">
    <label for="salary">Enter Salary</label>
    <input type="float" name="salary" id="salary">
    <label for="bonus">Enter Bonus:</label>
    <input type="float" name="bonus" id="bonus">
    <input type="submit" value="Submit">
  </form>
</body>

</html>