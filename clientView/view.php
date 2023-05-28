<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretest 2 Interoperabilitas</title>
</head>

<body>
    <h1 id="response-header">Menunggu Response</h1>
    <input type="text" id="input-field" placeholder="masukan nama"><br>
    <button id="get-data-button">Hit Api</button>

    <script>
        var button = document.getElementById("get-data-button");
        var input = document.getElementById("input-field");
        var header = document.getElementById("response-header");

        button.addEventListener("click", function() {

            var xhr = new XMLHttpRequest();
            if (!(input.value === "")) {
                xhr.open("GET", "http://localhost:8080/" + input.value, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var response = xhr.responseText;
                        var arr_resp = response.split("\"");
                        header.textContent = arr_resp[1];
                    }
                };
            } else {
                xhr.open("GET", "http://localhost:8080/", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var response = xhr.responseText;
                        var arr_resp = response.split("\"");
                        header.textContent = arr_resp[1];
                    }
                };
            }
            xhr.send();
        });
    </script>
</body>

</html>