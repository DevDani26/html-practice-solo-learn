<?php
    // Detecta la página actual
    $current_page = $_SERVER['PHP_SELF'];

    function navItemHtml($href, $text) {
        // Detecta la página actual
        $current_page = $_SERVER['PHP_SELF'];
        $activeClass = ($current_page == $href) ? 'nav-active' : '';
        
        return  <<<HTML
            <li class="$activeClass">
                <a href="$href">
                    $text
                </a>
            </li>
        HTML;
    };
  
?>

<header class="dani-header">
    <nav>
        <ul>
            <li class="<?php echo ($current_page == '/index.php') ? 'nav-active' : ''; ?>">
                <a href="/index.php">Home</a>
            </li>

            <li class="<?php echo ($current_page == '/01-basic-html-structure/index.php') ? 'nav-active' : ''; ?>">
                <a href="/01-basic-html-structure/index.php">Structure HTML</a>
            </li>
            <li class="<?php echo ($current_page == '/02-text-formatting-tags/index.php') ? 'nav-active' : ''; ?>">
                <a href="/02-text-formatting-tags/index.php">Formatting tags</a>
            </li>
            <li class="<?php echo ($current_page == '/03-lists-and-links/index.php') ? 'nav-active' : ''; ?>">
                <a href="/03-lists-and-links/index.php">List and links</a>
            </li>
            <li class="<?php echo ($current_page == '/04-images-and-multimedia/index.php') ? 'nav-active' : ''; ?>">
                <a href="/04-images-and-multimedia/index.php">Images</a>
            </li>
            <li class="<?php echo ($current_page == '/05-tables/tablas.php') ? 'nav-active' : ''; ?>">
                <a href="/05-tables/tablas.php">Tables</a>
            </li>
            <li class="<?php echo ($current_page == '/06-forms/index.php') ? 'nav-active' : ''; ?>">
                <a href="/06-forms/index.php">Forms</a>
            </li>
            <li class="<?php echo ($current_page == '/07-semantic/index.php') ? 'nav-active' : ''; ?>">
                <a href="/07-semantic/index.php">Semantic</a>
            </li>
            <li class="<?php echo ($current_page == '/08-basic-web-page-project/index.php') ? 'nav-active' : ''; ?>">
                <a href="/08-basic-web-page-project/index.php">Basic web page</a>
            </li>
        </ul>
    </nav>
</header>