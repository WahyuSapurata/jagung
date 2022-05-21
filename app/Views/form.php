<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <form id="form">
        <fieldset>
            <legend>Login</legend>
            <p>
                <label>Username:</label>
                <input type="text" name="username" placeholder="username..." />
            </p>
            <p>
                <label>namafile</label>
                <input name="namafile" />
            </p>
            <p>
                <input type="submit" name="submit" value="Login" />
            </p>
        </fieldset>
    </form>
    <div>status
        <div id="status"></div>
    </div>
    <textarea id="hasil" cols="30" rows="10"></textarea>
</body>

<script>
    const form = document.getElementById('form');
    const coba = document.getElementById('status');
    const textarea = document.getElementById('hasil');
    form.addEventListener('submit', (e) => {
        e.preventDefault()
        fetch('http://localhost:8080/buat_file/proses', {
            method: 'POST',
            // headers: {
            //     'Content-Type':'multipart/form-data'
            // },
            body: new FormData(form)
        }).then((result) => {
            coba.textContent = 'parsing'
            return result.text()
        }).then((result) => {
            textarea.value = result
            coba.textContent = 'berhasil'
        }).catch((hasil) => {
            coba.textContent = hasil
        })
        coba.textContent = 'mengirim'
    });
</script>

</html>