
<?php $currentPage = 'Home'; ?>
<?php require '../common/head.php'; ?>
<?php require '../common/navBar.php'; ?>
<body>
    <main class="main">
        <h1>Home Page</h1>
        <br>

        <ul class="list-group row">
            <h2 class="list-group-item col-xs-6 thlist">Individual Assignments</h2>
            <h2 class="list-group-item col-xs-6 thlist">Team Assignments</h2>
        </ul>
        <ul class="list-group row">
            <li class="list-group-item col-xs-6 hlist"><a href="../shoppingCart/view/" class="btn btn-info" role="button">Shopping Cart</a></li>
            <li class="list-group-item col-xs-6 hlist"><a href="../teamActivities/activityOne/view/Home.html" class="btn btn-info" role="button">Bootstrap/Jquery</a></li>
        </ul>
        <ul class="list-group row">
            <li class="list-group-item col-xs-6 hlist"><a href="../../db/myDb.sql" class="btn btn-info" role="button">My Database SQL</a></li>
            <li class="list-group-item col-xs-6 hlist"><a href="../teamActivities/activityTwo/view/" class="btn btn-info" role="button">Forms</a></li>
        </ul>
        <ul class="list-group row">
            <li class="list-group-item col-xs-6 hlist"><a href="../hannahmacphoto/" class="btn btn-info" role="button">HannahMacPhotography</a></li>
            <li class="list-group-item col-xs-6 hlist"><a href="../../db/teamDb.sql" class="btn btn-info" role="button">Conference Notes SQL</a></li>
        </ul>


    </main>
</body>
<?php require '../common/footer.php'; ?>