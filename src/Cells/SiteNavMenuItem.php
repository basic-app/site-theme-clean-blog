<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSiteNavMenuItem as Cell;

class SiteNavMenuItem extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/nav-menu-item.php';
}