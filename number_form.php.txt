<head>
    <meta charset="UTF-8">
    <title>Questionar</title>
</head>
<body>
    <h2>Assignment 3</h2>
    <p>Please fill in this form and hit submit at the bottom. Thank you!</p>
    <form action="handle_form.php" method="post">
<br>
	<p> Please fill in your name
</p>
<br>
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
<br>
<p> What is your gender? </p>
<br>
        <p>
        	<input type="radio" name="gender" value="male"> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other
        </p>
<br>
<p> Where would you go visit in the world? </p>
<br>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>