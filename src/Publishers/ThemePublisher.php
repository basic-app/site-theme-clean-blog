<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteThemeCleanBlog\Publishers;

use BasicApp\Publisher\Publisher as BasePublisher;

class ThemePublisher extends BasePublisher
{
    protected $source = VENDORPATH . 'basic-app/site-theme-clean-blog/assets/';

    protected $destination = FCPATH . 'themes/site-clean-blog/';

    protected $createDestination = true;

    public function publish(): bool
    {
        helper(['filesystem']);

        if (count(directory_map($this->destination)) > 0)
        {
            return true;
        }
        
        return $this->addPath('/')->merge(true);
    }
}