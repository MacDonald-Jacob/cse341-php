
<?php $currentPage = 'Home'; ?>
<?php require '../common/head.php'; ?>
<?php require '../common/navBar.php'; ?>
<body>
    <main class="main">
        <h1>Home Page</h1>
        <br>

        <ul class="list-group row">
            <h2 class="list-group-item col-xs-6">Individual Assignments</h2>
            <h2 class="list-group-item col-xs-6">Team Assignments</h2>
        </ul>
        <ul class="list-group row">
            <li class="list-group-item col-xs-6"><a href="../shoppingCart/view/" class="btn btn-info" role="button">Shopping Cart</a></li>
            <li class="list-group-item col-xs-6"><a href="../teamActivities/activityOne/view/Home.html" class="btn btn-info" role="button">Bootstrap/Jquery</a></li>
        </ul>
        <ul class="list-group row">
            <li class="list-group-item col-xs-6"><a href="#" class="btn btn-info" role="button">Coming Soon!</a></li>
            <li class="list-group-item col-xs-6"><a href="../teamActivities/activityTwo/view/" class="btn btn-info" role="button">Forms</a></li>
        </ul>


    </main>
</body>
<?php require '../common/footer.php'; ?>