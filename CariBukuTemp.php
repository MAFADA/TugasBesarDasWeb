<table>        
    <tbody>
        <?php
        include "koneksiDB.php";
        $key=$_GET['cari'];
        if (isset($key)) {
            $query=mysqli_query($connect,"SELECT b.kode_buku,b.judul,b.pengarang,p.nama_penerbit as Penerbit,b.tahun_terbit
            FROM buku b
            LEFT OUTER JOIN penerbit p ON p.id_penerbit=b.id_penerbit
            WHERE b.judul LIKE %'$key'%");
        }

        while ($row=mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?= $row['kode_buku'];?></td>
            <td><?= $row['judul'];?></td>
            <td><?= $row['pengarang'];?></td>
            <td><?= $row['Penerbit'];?></td>
            <td><?= $row['tahun_terbit'];?></td>
        </tr>
    </tbody>
</table>