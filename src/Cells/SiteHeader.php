<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Cells;

use BasicApp\SiteTheme\Cells\BaseSiteHeader as Cell;

class SiteHeader extends Cell
{
    protected string $view = VENDORPATH . 'basic-app/site-theme-clean-blog/templates/header.php';

    public function mount(): void
    {
        parent::mount();
        
        if (!$this->backgroundUrl)
        {
            $this->backgroundUrl = base_url('themes/site-clean-blog/assets/img/home-bg.jpg');
        }
    }
}