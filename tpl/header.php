<?php include 'menu.php'; ?>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php 
                            $currentPageUrl = $_SERVER['REQUEST_URI']; 
                            foreach ($menuLinks as $item) {
                                $isActive = $currentPageUrl == $item['link'] ?  'active' : ''; 
                                $isCurrentAria = $currentPageUrl == $item['link'] ?  'aria-current="page"' : ''; 
                            ?>
                                                           
                                <li class="nav-item"><a class="nav-link <?php echo $isActive; ?>" <?php echo $isCurrentAria;?> href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></li>
                            <?php }; ?>
                            </ul>
                            <span class="navbar-text">
                                <?php echo $menuFixed; ?>
                            </span>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</body>

</html>