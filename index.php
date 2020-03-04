<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>socialending.de</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container" id="startForm">
        <div class="row">
            <div class="col-md-12 text-center">
                <label for="username" class="h1">Wie lautet dein Instagram UserName? <span class="userNameAt">@</span><input type="text" name="username" id="userName"></label>
            </div>
        </div>
   </div>
   <div class="container dontShowLoading" id="loadingScreen">
        <div class="row">
            <div class="col-md-12 text-center">
                <i class="fas fa-spinner fa-4x"></i>
            </div>
        </div>
   </div>
   <div class="container py-5 my-5" id="profilExport">
        <div class="row d-flex justify-content-end">
            <div class="col-md-5 d-flex justify-content-end">
                <label for="username" id="labelUserNamePreview"><span class="userNameAt">@</span><input type="text" name="username" id="userNamePreview"></label>
                <button id="searchButton">
                    <i class="fas fa-search fa-1x"></i>
                </button>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-2">
                <img id="profilImg" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-8 pt-2">
                <h2 id="fullName"></h2>
                <div class="d-flex">
                    <p class="pr-3 m-0"><b>Follower:</b> <span id="follower"></span></p>
                    <p class="m-0"><b>Folgt:</b> <span id="following"></span></p>
                </div>
                <p><b>Biografie:</b> <span id="biography"></span></p>
                <a id="externalUrl" target="_blank"></a>
            </div>
        </div>
        <div class="row pt-5">
            <h3><span id="fullNameImg"></span> hat insgesamt <span id="posts"></span> Posts. Das sind die neusten 9 Stück:</h3>
        </div>
        <div class="row pt-3">
            <div class="col-md-4 mb-4">
                <img id="img1" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img2" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img3" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img4" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img5" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img6" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img7" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img8" class="preview-img img-fluid">
            </div>
            <div class="col-md-4 mb-4">
                <img id="img9" class="preview-img img-fluid">
            </div>
        </div>
   </div>
   <footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/insta.js"></script>
   </footer>
</body>
</html>