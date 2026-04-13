<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSitePosts as Cell;

class SitePosts extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/posts.php';
}