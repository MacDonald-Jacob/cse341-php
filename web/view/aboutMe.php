<?php $currentPage = 'aboutMe'; ?>
<?php require '../common/head.php'; ?>
<?php require '../common/navBar.php'; ?>
<body class="body">
    <main>
        <h1 class="text-center">About Me</h1>
        <img class="center-block img-circle" src="../images/me.png" alt="picture of me" id="meImg">
        <p class="text-center" id="aboutMeP">Welcome to my site. This site was created to keep track of assignments for WebBackend Development II. I'm not going to share a ton of personal information with you but I'll share some of my interests.</p>
        <h2 class="text-center">Interests</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NzEX3QMuVPM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WyxXGdG3-Io" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_TEqgU4LpnA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/me/burger.jpg" alt="burger" title="Burger">
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/me/church.jpg" alt="church" title="Church">
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/me/code.jpg" alt="code" title="Code">
                </div>
                <div class="col-sm-3">
                    <img class="img-responsive" src="../images/me/scotland.jpg" alt="scotland" title="Scotland">
                </div>
            </div>
        </div>

    </main>
<?php require '../common/footer.php'; ?>
