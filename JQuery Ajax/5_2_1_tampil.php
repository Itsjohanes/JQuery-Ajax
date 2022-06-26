<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            var i = 0;
            $('button').click(function() {
                $.ajax({

                    url: "5_2_1_hitung.php",
                    type: "GET",
                    data: {
                        count: i
                    },
                    success: function(data) {
                        i = data;
                        $('.tampil').append(" " + data);

                    },

                    error: function(data) {
                        alert("tidak dapat memproses");
                    }
                });

            });
        });
    </script>
</head>

<body>
    <button>hitung</button>
    <div class='tampil'></div>
</body>

</html>