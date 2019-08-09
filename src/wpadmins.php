
<!--
This is simple Tool to extract the wordpress admin users .
Auther: Alaa Abdulridha.
contact: https://alaa.blog
-->
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<form method="POST" action="?">
    <div class="container"><br><br><br>
        <div class="row">
            <div class="alert alert-warning" role="alert">

                <p class="mb-0">Enter Wordpress URL for example http://demo.com and you will get the admin users.</p>
            </div>
            <div class="col-md-12">
                <div class="form-group">

                    <label for="inputsm">URL:</label>
                    <input class="form-control form-control-lg" name="url" type="text" id="inputsm" placeholder="https://www.site.com">

                    <br>
                    <input name="submit" type="submit" class="btn btn-success" value="Get Admin Users">
                </div>

</form>
<?php

//error_reporting(0); Activate this if you wanna hide the errors

 if(isset($_POST['submit'])){
         $url = $_POST['url'];
         $readjson = file_get_contents($url."/wp-json/wp/v2/users/", true);
            //Decode JSON
         $data = json_decode($readjson, true);


    foreach ($data as $wpvar) {
        echo '<div class="container"><div class="row"><div class="alert alert-success" role="alert"><p class="mb-0">';
        echo "ID==>" . $wpvar['id']."<br/>";
        echo "Name==>" .$wpvar['name']."<br/>";
        echo "Slug==>" .$wpvar['slug']."<br/>";
        echo '</p></div></div></div>';
    }
}
?>
</div>
</div>
</div>
</body>
</html>

