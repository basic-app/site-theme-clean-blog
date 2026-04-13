<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSiteFooter as Cell;

class SiteFooter extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/footer.php';

    public function mount(): void
    {
        $this->copyright = str_replace('{year}', date('Y'), $this->copyright);
    }
}