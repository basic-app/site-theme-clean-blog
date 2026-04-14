<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSitePost as Cell;

class SitePost extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/post.php';
}