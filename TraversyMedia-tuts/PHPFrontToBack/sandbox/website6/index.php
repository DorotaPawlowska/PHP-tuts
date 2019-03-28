<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suggestions</title>
    <link 
    href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-N8DsABZCqc1XWbg/bAlIDk7AS/yNzT5fcKzg/TwfmTuUqZhGquVmpb5VvfmLcMzp" crossorigin="anonymous">    
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search Users: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" stylr="font-weight: bold;"></span></p>
    </div>

    <script>
        function showSuggestion(str) {
            // console.log(str);
            if(str.length == 0){
                document.getElementById('output').innerHTML = '';
            } else {
                // ajax
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>

</body>
</html>