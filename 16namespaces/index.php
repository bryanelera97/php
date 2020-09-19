<?php

require"Admin/blog.php";
require"Blog.php";

use Admin\Blog as AdminBlong;
$admingBlog = new AdminBlong;
echo "<br/>";
$blog=new Blog;
