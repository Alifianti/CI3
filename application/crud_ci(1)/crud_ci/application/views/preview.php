<html>
    <head>
        <title><?php echo $data['judul']; ?></title>
    </head>
    <body>
    	<?php foreach ($isi as $data) { ?>
			<tr>
				<h1><td><?php echo $data['judul']; ?></td></h1>
                <p><td><?php echo $data['tgl']; ?></td></p>
                <p><td><?php echo $data['author']; ?></td></p>
            </br></br>
                <td><?php echo $data['isi']; ?></td>
                <td><img src="<?php echo base_url('images/uploaded/'.$data['img']); ?>"></td>			
			</tr>
		<?php } ?>
        <td align="center">
                    <a href="<?php echo base_url()."crud"; ?>">back</a>
                </td>
    </body>
    </html>