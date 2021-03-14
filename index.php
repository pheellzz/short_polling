<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <h1> Live Data Updates with API</h1>

    <p>
        View Count:
        <strong id="viewCount">0</strong>

        <script>
            function liveUpdates() {
                const viewCount = document.getElementById("viewCount");

                setInterval(function() {
                    fetch("./view_count.php")
                        .then((response) => {
                            return response.json();
                        }).then((data) => {
                            viewCount.textContent = data.viewCount
                        }).catch((error) => {
                            console.log(error);
                        })
                }, 3000)

            }

            document.addEventListener("DOMContentLoaded", () => {
                liveUpdates();
            })
        </script>
</body>
</html>