<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF and Save to Server</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="pdf-form" action="<?php echo base_url('pdf/generate_pdf'); ?>" method="post">
        <input type="text" name="nama" placeholder="Nama" required>
        <br>
        <input type="text" name="email" placeholder="Email" required>
        <br>
        <button type="submit" name="submit">Generate PDF</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#pdf-form').on('submit', function(e) {
                e.preventDefault();

                // kirim form data ke controller untuk menghasilkan PDF
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {
                            // jika berhasil menghasilkan PDF dan menyimpannya ke server, tampilkan link download
                            var downloadUrl = response.url;
                            var link = '<a href="' + downloadUrl + '">Download PDF</a>';
                            $('#pdf-form').after(link);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
