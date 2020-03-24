<?php 

	session_start(); 
	
	if(isset($_SESSION['username']) == true){

		header("Location: pagina.php");

	}
?>
<style>
	* {
    padding: 0;
    margin: 0 auto;
}

div{
    border: 1px solid #ddd;
    margin-top: 15%;
    max-width: 300px;
	max-height: 300px;
	width:130%;
    display: flex;
    flex: 1;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    animation: top 1s 1s;
    
}
form{
	max-width: 3000px;
    display: flex;
	flex-direction: column;
	
}
form .lembrar{
    animation:right 2s 1s;
    
    display: flex;
    max-width: 200px;
    flex-direction: row;
    justify-content: space-around;
    width: 100%;
    border: none;
}

form .lembrar label{
    font: 30px Arial;
    width: 80%;

}

form input{
    animation:left 2s 1s;
	width: 100%;
	height:50px;
    margin: 10px;
    border-radius: 10px;
    outline: none;
    border: 1px solid #ddd;
    padding: 1px 1px;
    border-color: black;

    
}

form input[type=submit]{
    animation:campos 2s 1s;
    background-color: rgb(0, 0, 0);
    border: none;
    color: #fff;
    border-radius: 10px;
}
.nam{
	font: 30px Helvetica;
}
@keyframes campos{
    from{
        transform: scale(0);
    }
    to{
        transform: scale(1);
    }
}
@keyframes left{
    from{
        transform: translateX(-200px);
    }
    to{
        transform: translateX(0px);
    }
}
@keyframes right{
    from{
        transform: translateX(200px);
    }
    to{
        transform: translateX(0px);
    }
}
@keyframes top{
    from{
        transform: translateY(-400px) scale(0);
        background-color: black;
    }
    to{
        transform: translateY(0px) scale(1);
        background-color: rgb(255, 253, 253);
    }
}
</style>

<form enctype="multipart/form-data" method="post" action="">
<div>
	<label class="nam" for="name">Usuario</label>
	<input  type="text" name="user" placeholder="Usuario.">
	<label class="nam" for="name">Senha</label>
	<input type="password" name="password" placeholder="Senha.">
	<input type="submit" name="env">
</div>
</form>
	
	<?php
    session_start();

		if(isset($_POST['env'])){
			
            $password = $_POST['password'];
            $user=$_POST['user'];
            $_SESSION['username']=$user;

			if( $password == $_POST['password'] ){

				$_SESSION['password'] = $password;

				header("Location: pagina.php");

			}else{

				echo "Não está logado";

			}



		}

	?>