<!DOCTYPE html>
<html>

<head>
    <title>Input Form Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('dlemas_controller/cetak_data'); ?>" method="post">
            <?php echo validation_errors(); ?>
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tanggallahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempatlahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="kelamin" value="Laki - laki"> Laki - laki
                        <input type="radio" name="kelamin" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
        </form>
    </center>
</body>

</html>