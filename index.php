<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Consuming Twitter Webserver</title>
    <script>
        window.onload = function() {
            var xhttp = new HMLHttpRequest();
            xhttp.onreadystatechange = funtion(){
                if (xhttp.readyState == 4 && xhttp.status == 200){
                    document.getElementById("twitter").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "http://napp.azurewebsites.net/", true);
            xhttp.send();
        }
    </script>

</head>
<body>
<header>
    <h1>Header Div</h1>

</header>
<main>
    <h2>Main Content</h2>

</main>
<aside id="twitter">

</aside>
</body>
</html>
