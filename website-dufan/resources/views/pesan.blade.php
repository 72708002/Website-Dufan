<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Ticket</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="style3.css">
    <style>
        form { line-height: 2em; }
        label, select, input { margin-left: 5px; width: 120px; display: block; float: left; line-height: 15px; }
        .container { width: 300px; margin: auto; }
        button { margin-top: 20px; }
        table { width: 100%; }
        th, td { padding: 10px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="pesan">
            <span>Welcome To</span>
            <h1>Dufan Ancol</h1>
        </div>
        <details open>
            <summary>Menu</summary>
            <table border="1">
                <thead>
                    <tr>
                        <th bgcolor="blue">Ticket Mode</th>
                        <th bgcolor="purple">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Regular Ticket Weekdays</td>
                        <td>Rp. 250.000</td>
                    </tr>
                    <tr>
                        <td>Regular Ticket Weekend</td>
                        <td>Rp. 275.000</td>
                    </tr>
                    <tr>
                        <td>Annual Pass</td>
                        <td>Rp. 370.000</td>
                    </tr>
                    <tr>
                        <td>Six Month Pass</td>
                        <td>Rp. 335.000</td>
                    </tr>
                </tbody>
            </table>
        </details>
        
        <h1>LAMAN PEMESANAN TIKET</h1>
        <form name="form">
            <label for="nama">Nama</label>
            <input type="text" name="input_nama" id="nama" size="10">
            <br>
            <label for="email">Email</label>
            <input type="text" name="input_email" id="email" size="10">
            <br>
            <label for="telepon">No. Telepon</label>
            <input type="text" name="input_telepon" id="telepon" size="10">
            <br>
            <label for="ticket">Ticket & Harga</label>
            <select name="input_ticket" id="ticket">
                <option value="Ticket">--Pilih--</option>
                <option value="Regular Ticket Weekdays|Rp. 250.000">Regular Ticket Weekdays - Rp. 250.000</option>
                <option value="Regular Ticket Weekend|Rp. 275.000">Regular Ticket Weekend - Rp. 275.000</option>
                <option value="Annual Pass|Rp. 370.000">Annual Pass - Rp. 370.000</option>
                <option value="Six Month Pass|Rp. 335.000">Six Month Pass - Rp. 335.000</option>
            </select>
            <br>
            <label for="jumlah">Jumlah Tiket</label>
            <input type="text" name="input_jumlahtiket" id="jumlah" size="10">
            <br>
        </form>
        <button><a href="finish.html">CHECK OUT</a></button>
    </div>
</body>
</html>
