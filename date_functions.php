<!DOCTYPE html>
<html>
<head>
    <title>PHP Date Functions</title>
    <link rel="stylesheet" href="str.css">
    <style>
          #frame{
            margin-top:-450px;
            margin-left:800px;
        }
        #head{
            margin-left:800px;
            margin-top:-40px
        }
        *{
            margin:10px
        }
        button{
            width:200px;
            height:30px;
            margin-left:250px;
            background-color: transperant;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #date{
             width:200px;
            height:30px;
            margin-left:240px;
            background-color: transperant;
            padding: 10px;
            border: 1px solid black;
            border-radius: 8px;
           
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        label{
             margin-left:240px;
        }
        .vertic{
            border-left:1px solid black;
            height:710px;
            margin-top:-600px;
            margin-left:700px; 
        }
    </style>
</head>
<body>
    <h2>PHP Date Functions</h2>
    <h2 id="head">Output</h2>
    

    <form method="GET" target="resultFrame" action="date_function_handler.php"><br>
        <label><strong>Enter Date (YYYY-MM-DD):</strong></label><br>
        <input type="date" name="inputDate" id="date" required><br><br>

        <button type="submit" name="func" value="dayofweek">Day of the Week</button><br>
        <button type="submit" name="func" value="adddays">Add 7 Days</button><br>
        <button type="submit" name="func" value="subdays">Subtract 7 Days</button><br>
        <button type="submit" name="func" value="timestamp">Get Timestamp</button><br>
        <button type="submit" name="func" value="today">Show Today</button><br>
        <button type="submit" name="func" value="difference">Days from Today</button><br>
    </form>

    <br><br>
  

    <iframe name="resultFrame" width="500px" height="500" style="border: 1px solid black;" id="frame"></iframe>
      <div class="vertic"></div>
</body>
</html>
