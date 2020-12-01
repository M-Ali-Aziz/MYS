<?php
namespace AppBundle\Document\Areabrick;

/**
 * Hero Banner Areabrick
 */
class HeroBanner extends AbstractAreabrick
{   
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Hero Banner';
    }

    /**
     * @inheritdoc
     */
    public function getIcon()
    {
        return '/bundles/pimcoreadmin/img/flat-color-icons/panorama.svg';
    }
}
