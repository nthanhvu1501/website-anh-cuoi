<!doctype html>
<style>
    *{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
body {
    overflow: hidden;
    background-color: #ededed;
}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}

.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 400px;
    width: 392px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}

label {
    margin-left: -126px;
    display: block;
}
input{
    display: block;
    border: 0.5px solid rgb(207, 204, 204);
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 5px;
    width: 70%;
}

input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px; 
    position: absolute;
    bottom: 10px;
    border: 0.5px solid black;
    cursor: pointer;
    background: linear-gradient(to right);
}

</style>
<html>
	<head>
		<title>Đăng ký</title>
		<link rel="stylesheet" href="CSS/1.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	</head>
	<body>
		<div class="to">
			<div class="form">
				<h2>Đăng ký</h2>
				<label style="margin-left: -170px;">Tên đăng nhập</label>
				<input type="text" name="tendangnhap">
				<label style="margin-left: -220px;">Mật khẩu</label>
				<input type="text" name="matkhau"> 
                <label style="margin-left: -240px;">Email</label>
				<input type="text" name="tendangnhap">
				<input id="submit" type="submit" name="submit" value="Đăng ký">
			</div>				
		</div>
	</body>
</html>