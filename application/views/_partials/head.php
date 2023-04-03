<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<title><?= isset($meta['title']) ? $meta['title'] : 'Perpustakaan' ?></title>

<style>
	.selector-for-some-widget {
 		box-sizing: content-box;
	}

	h1 {
		font-family: Arial, Helvetica, sans-serif;
		text-align:center;
	}

	.navbar {
		padding: 0;
		display: flex;
		background-color: #701BE5;
		margin-bottom: 5vh;
	}

	.navbar a {
		color: white;
		font-family: sans-serif;
		font-weight: 500;
		text-decoration: none;
		padding: 1rem;
	}

	.navbar a:hover {
		background-color: rgba(255, 255, 255, 0.1);
	}

	.footer {
		font-family: sans-serif;
		background-color: whitesmoke;
		padding: 1em;
		text-align: center;
		border-top: 2px solid lightgray;
		margin-top: 5vh;
	}

	.form-group {
		margin: 5px;
	}

	.content {
		padding-left: 5vh;
		padding-right: 5vh;
	}

	#act {
		text-decoration: none;
	}

</style>