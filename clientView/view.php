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
    <button id="get-data-button">Get Data</button>

    <script>
        // Mendapatkan referensi elemen tombol dan header
        var button = document.getElementById("get-data-button");
        var header = document.getElementById("response-header");

        // Menambahkan event listener saat tombol ditekan
        button.addEventListener("click", function() {
            // Mengirim permintaan GET API menggunakan fetch()
            
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "http://localhost:8080/", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText;
                    // Lakukan sesuatu dengan respons yang diterima
                    header.textContent = response;
                }
            };
            xhr.send();
        });
    </script>
</body>

</html>