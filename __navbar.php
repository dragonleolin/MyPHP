<style>
    .nav-item.active {
        background-color: orange;
    }

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item  <?= $page_name=='data_list' ? 'active' : '' ?>">
                    <a class="nav-link" href="__data_list.php">DATALIST</a>
                </li>
                <li class="nav-item  <?= $page_name=='data_list2' ? 'active' : '' ?>">
                    <a class="nav-link" href="__data_list2.php">DATALIST2 (Ajax)</a>
                </li>
                <li class="nav-item  <?= $page_name=='data_insert' ? 'active' : '' ?>">
                    <a class="nav-link" href="__data_insert.php">新增資料</a>
                </li>
                <li class="nav-item  <?= $page_name=='page2' ? 'active' : '' ?>">
                    <a class="nav-link" href="__page2.php">Page2</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>