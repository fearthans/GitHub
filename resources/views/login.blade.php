<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="style.css">
         
    <title>Login & Registration Form</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url("https://mipa.untan.ac.id/file/slideshow/02e4cf16378ac1e1214fcef62c2d231e.JPG");
    background-size: cover;
    background-position: center;
    margin: 0;
}

.container{
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 0 10%;
    margin-left: auto;
    opacity: 0.95;
}

.container .forms{
    display: flex;
    align-items: center;
    height: 440px;
    width: 200%;
    transition: height 0.2s ease;
}


.container .form{
    width: 50%;
    padding: 30px;
    background-color: #fff;
    transition: margin-left 0.18s ease;
}

.container.active .login{
    margin-left: -50%;
    opacity: 0;
    transition: margin-left 0.18s ease, opacity 0.15s ease;
}

.container .signup{
    opacity: 0;
    transition: opacity 0.09s ease;
}
.container.active .signup{
    opacity: 1;
    transition: opacity 0.2s ease;
}

.container.active .forms{
    height: 600px;
}
.container .form .title{
    position: relative;
    font-size: 27px;
    font-weight: 600;
}

.form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: #f48540;
    border-radius: 25px;
}

.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}

.input-field input{
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid){
    border-bottom-color: #f47940;
}

.input-field i{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
    color: #ff5900;
}

.input-field i.icon{
    left: 0;
}
.input-field i.showHidePw{
    right: 0;
    cursor: pointer;
    padding: 10px;
}

.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.checkbox-text .checkbox-content{
    display: flex;
    align-items: center;
}

.checkbox-content input{
    margin: 0 8px -2px 4px;
    accent-color: #ff5900;
}

.form .text{
    color: #333;
    font-size: 14px;
}

.form a.text{
    color: #ff5900;
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}

.form .button{
    margin-top: 35px;
}

.form .button input{
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color: #ff5900;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input:hover{
    background-color: #ff7226;
}

.form .login-signup{
    margin-top: 30px;
    text-align: center;
}

.siakad-title {
    position: absolute;
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
        font-size: 36px;
        font-weight: bold;
        color: #fff; /* Warna teks sesuaikan dengan kebutuhan */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Efek bayangan teks */
        z-index: 999; /* Pastikan tulisan SIAKAD tampil di atas elemen lain */
}
</style>
<body>
    <div class="siakad-title"><img src="https://upload.wikimedia.org/wikipedia/id/0/03/Lambang_Universitas_Tanjungpura.png" width="50%"><br>SISTEM INFORMASI<br>AKADEMIK</div>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Masuk </span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Masukkan NIM" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Masukkan password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Lupa password?</a>
                    </div>

                    <div class="input-field button">
                        <a href="Home.html"><input type="button" value="Masuk"></a>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Belum memiliki akun??
                        <a href="#" class="text signup-link">Daftar</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Daftar</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Masukkan nama Anda" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Masukkan NIM Anda" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Masukkan password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Konfirmasi password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Lupa password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Daftar">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Sudah punya akun?
                        <a href="#" class="text login-link">Masuk</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>

        const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })


    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });

    </script>

<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body>
</html>
