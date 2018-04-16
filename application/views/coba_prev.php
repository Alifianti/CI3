<html>
    <head>
        <title><?php echo $data['judul']; ?></title>
    </head>
    <body>
    	<?php foreach ($isi as $data) { ?>
			<tr>
				<h1><td><?php echo $data['judul']; ?></td></h1>
                <p><td><?php echo $data['tgl']; ?></td></p>
                <p><td><?php echo $data['tempat']; ?></td></p>
            </br></br>
                <td><?php echo $data['caption']; ?></td>
                <td><img src="<?php echo base_url('images/'.$data['img']); ?>"></td>			
			</tr>
		<?php } ?>
        <td align="center">
                    <a href="<?php echo base_url()."coba"; ?>">back</a>
                </td>
    </body>
    </html>