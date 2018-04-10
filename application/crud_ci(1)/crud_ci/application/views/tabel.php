<h1>Data Artikel</h1>
        <?php echo "<h2>".$this->session->flashdata('pesan')."</h2>" ?>
        
        <table class="table table-hover">
            <thread>
                <th>Id</th>
                <th>Judul</th>
                <th>Tanggal</th> 
                <th>Penulis</th>
                <th>Isi</th>
                <th>Action</th>
            </tr>
        </thread>
        <tbody>
         <?php foreach($result as $d){ ?>
            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['tgl']; ?></td>
                <td><?php echo $d['author']; ?></td>
                <td><?php echo $d['isi']; ?></td>
                <td align="center">
                    <a href="<?php echo base_url()."crud/do_preview/".$d['id']; ?>">Preview</a> || 

                </td>
            </tr>
        </tbody>
           <?php } ?> 
            <td align="center">
            <a href="<?php echo base_url()."crud/add_data/"; ?>">Tambah</a> ||
                    <a href="<?php echo base_url()."crud/upload/"; ?>">Upload</a>
                </td>
        </table>