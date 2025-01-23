<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Contact Section */
        .contact {
            background-color: #ffffff;
            padding: 50px 0;
            text-align: center;
        }

        .contact form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact input,
        .contact textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .contact .btn {
            background-color: #000000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <a href="">home</a>
    <a href="about">about</a>
    <a href="blog">blog</a>
    <a href="contact">contact</a>
    <br>
    <div class="row" data-aos="fade-right" data-aos-duration="1000">
                <div class="container">
                    <h2>Kontak Saya</h2>
                    <form action="submit_form.php" method="POST">
                        <input type="text" name="name" placeholder="Nama Anda" required />
                        <input type="email" name="email" placeholder="Email Anda" required />
                        <textarea name="message" placeholder="Catatan" required></textarea>
                        <button type="submit" class="btn">Kirim</button>
                    </form>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>