<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	
	<title>Projet Alpha</title>
	<link rel="stylesheet" href="{{asset('auth/style.css')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
                        @csrf
				<h1>Creer un compte</h1>
				<div class="social-container">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-google-plus-g"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>Utiliser compte gmail</span>
				<input type="text" placeholder="Nom" name="name" required>
				<input type="email" placeholder="Email" name="email" required>
				<input type="password" placeholder="Mot de passe" name="password" required>
				<div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                            @enderror</div>
				<input type="password" placeholder=" Confirm Mot de passe" name="password_confirmation" required>
				<button type="submit">Creer le compte</button>
			</form>
		</div>
		<div class="form-container login-container">
			
        <form method="POST" action="{{ route('login') }}">
                        @csrf
				<h1>Se connecter</h1>
				<div class="social-container">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-google-plus-g"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>Je n'ai pas de compte</span>
				<input type="email" placeholder="Email" name="email" required>
				<input type="password" placeholder="Mot de passe" name="password" required>
				<button type="submit">Se connecter</button>
			</form>
		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Lorem ipsum dolor sit amet consectetur.</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
					<button class="ghost" id="login">Se connecter</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Lorem ipsum dolor sit amet consectetur.</h1>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
					<button class="ghost" id="signUp">Creer un compte</button>
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('auth/script.js')}}" charset="utf-8"></script>

</body>

</html>