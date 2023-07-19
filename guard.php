
<?php session_start()?>
<html>
<head>
	<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js
"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js
"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js
"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
	.container textarea{
		height: 40%;
		width: 80%;
		margin: 20px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<video id="preview" width="100%"></video>

				
			</div>
			<div class="col-md-6">
				<form action="insert.php " method="post" class="form-horizontal">
				<textarea type="text" name="text" id="text" readonly="" placeholder="Scan Your Qr Code" class="form-container"></textarea>
			</form>

			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="2" border="3">
         <thead>
              <tr>
                            <th>id</th>
                            <th>timein</th>


                        </tr>
                    </thead>
                    <tbody>

                <?php
                include ('connection.php');
                if($conn->connect_error){
  die("connection failed" .conn->connect_error);
}
               $query = "SELECT id,timein FROM  qrcode";
               $data = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_assoc($data)){
?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['timein']; ?></td>
                                               
                            </tr>
                        <?php
                            };
                        ?>
   
                     </tr>
                  </tbody>
			

			</div>
		</div>
	</div>
<br>
	<script>
		let scanner = new Instascan.Scanner({video: document.getElementById('preview')});
		Instascan.Camera.getCameras().then(function(cameras){
			if(cameras.length >0 ){
				scanner.start(cameras[0]);
			}else{
				alert('No camears found');
			}
		}).catch(function(e){
			console.error(e);
		});

		scanner.addListener('scan', function(c){
			document.getElementById('text').value=c;
			document.forms[0].submit();
		});
	</script>

<a href="logout.php"><button>LogOut</button></a>

</body>
</html>

