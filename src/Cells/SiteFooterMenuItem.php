<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSiteFooterMenuItem as Cell;

class SiteFooterMenuItem extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/footer-menu-item.php';
}