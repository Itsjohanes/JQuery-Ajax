<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        $(function() {
            $('#myform').submit(function() {
                $.ajax({
                    url: "5_2_2_simpan.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        $('[name = nama').val("");
                        $('[name = jabatan').val("");
                    },
                    error: function(data) {
                        alert("tidak dapat memproses");
                    }
                });
                return false;

            });
        });
    </script>
</head>

<body>
    <form id="myform">
        <table>
            <tr>
                <td>nama pegawai</td>
                <td>:<input type="text" name="nama"></td>

            </tr>
            <tr>
                <td>id jabatan</td>
                <td> <input type="number" name="jabatan"></td>

            </tr>
            <tr>
                <td colspan="2"> <button>Simpan</button></td>

            </tr>
        </table>
    </form>
</body>

</html>