<?php
//Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars. The input fields are categories, tags and months. The first sidebar should contain a list of the categories, the second sidebar – a list of the tags and the third should contain the months. The entries in the input strings will be separated by a comma and space ", ". Styling the page is optional. Semantic HTML is required.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sidebar Builder</title>
        <meta charset="UTF-8" />
        <style>
            aside {
                background-color: #446CFF;
                width: 130px;
                border: 1px solid black;
                border-radius: 15px;
            }
            a {
                color: black;
            }
            ul li {
                list-style-type: circle;
            }
            h3 {
                padding-left: 10px;
                padding-bottom: 0;
                margin-bottom: 0;
            }
            hr {
                padding: 0 0 0 10px;
                margin: 0;
                color: black;
            }
        </style>
    </head>
    <body>

    <form action="" method="post">
        <label for="categories">Categories:</label>
        <input  id="categories" type="text" name="categories" /><br/>
        <label for="tags">Tags:</label>
        <input id="tags" type="text" name="tags" /><br/>
        <label for="months">Months:</label>
        <input id="months" type="text" name="months" /><br/>
        <input type="submit" value="Generate" /><br/>
    </form>
    <?php
    if (isset($_POST['categories']) && !empty($_POST['categories']) && (isset($_POST['tags'])) && !empty($_POST['tags']) && (isset($_POST['months'])) && !empty($_POST['months'])){
        $categories = $_POST['categories'];
        $tags = $_POST['tags'];
        $months = $_POST['months'];
        $categories = explode(", ", $categories);
        $categories = array_filter($categories);
        $tags = explode(", ", $tags);
        $tags = array_filter($tags);
        $months = explode(", ", $months);
        $months = array_filter($months);
        $length_categories = count($categories);
        $length_tags = count($tags);
        $length_months = count($months);
    echo $categories[0];
    ?>
    <aside>
        <nav>
            <h3>Categories</h3>
            <hr />
            <ul>
                <?php
                for ($i = 0; $i < $length_categories; $i++) { ?>
                    <li><a href="http://www.<?=$categories[$i]?>.com"><?=$categories[$i]?></a></li>
          <?php } ?>

            </ul>
        </nav>
    </aside>
    <aside>
        <nav>
            <h3>Tags</h3>
            <hr />
            <ul>
                <?php
                for ($i = 0; $i < $length_tags; $i++) { ?>
                    <li><a href="http://www.<?=$tags[$i]?>.com"><?=$tags[$i]?></a></li>
          <?php } ?>
            </ul>
        </nav>
    </aside>
    <aside>
        <nav>
            <h3>Categories</h3>
            <hr />
            <ul>
                <?php
                for ($i = 0; $i < $length_months; $i++) { ?>
                    <li><a href="http://www.<?=$months[$i]?>.com"><?=$months[$i]?></a></li>
          <?php } ?>
          <?php } ?>
            </ul>
        </nav>
    </aside>

    </body>
</html>
<!--<aside>-->
<!--    <!-- this aside contains two sections that are tangentially related-->
<!--    to the page, namely, links to other blogs, and links to blog posts-->
<!--    from this blog -->
<!--    <nav>-->
<!--        <h1>My blogroll</h1>-->
<!--        <ul>-->
<!--            <li><a href="http://blog.example.com/">Example Blog</a>-->
<!--        </ul>-->
<!--    </nav>-->
<!--    <nav>-->
<!--        <h1>Archives</h1>-->
<!--        <ol reversed>-->
<!--            <li><a href="/last-post">My last post</a>-->
<!--            <li><a href="/first-post">My first post</a>-->
<!--        </ol>-->
<!--    </nav>-->
<!--</aside>-->