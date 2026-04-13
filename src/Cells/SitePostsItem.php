<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSitePostsItem as Cell;

class SitePostsItem extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/posts-item.php';
}