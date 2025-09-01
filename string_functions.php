<!DOCTYPE html>
<html>
<head>
    <title>String Function Dynamic Page</title>
     <style>
          #frame{
            margin-top:-850px;
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
        input{
            margin-left:250px;
            height:30px;
            width:200px;
            border-radius:10px;
            text-align:center;
        }
        .vertic{
            border-left:1px solid black;
            height:710px;
            margin-top:-650px;
            margin-left:700px;
        }
    </style>
</head>
<body>
    <h2>PHP String Functions</h2>

    <form method="GET" target="resultFrame" action="string_function_handler.php">
        <h2 id="head">Output</h2><br>
       
        <input type="text" name="inputText" placeholder="Enter a text" required ><br><br>

        <button type="submit" name="func" value="length">Length</button><br>
        <button type="submit" name="func" value="reverse">Reverse</button><br>
        <button type="submit" name="func" value="uppercase">Uppercase</button><br>
        <button type="submit" name="func" value="lowercase">Lowercase</button><br>
        <button type="submit" name="func" value="wordcount">Word Count</button><br>
        <button type="submit" name="func" value="ucfirst">ucfirst</button><br>
        <button type="submit" name="func" value="ucwords">ucwords</button><br>
        <button type="submit" name="func" value="position">Find 'PHP'</button><br>
        <button type="submit" name="func" value="replace">Replace 'PHP' with 'Awesome'</button>
    </form>

    <br><br>

    <iframe name="resultFrame" width="500px" height="500" style="border: 1px solid black;" id="frame"></iframe>
    <div class="vertic"></div>
</body>
</html>
