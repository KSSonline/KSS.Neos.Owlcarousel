<?php
namespace KSS\Neos\Owlcarousel\ViewHelpers;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Resource\ResourceManager;
use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

class IncludeViewHelper extends AbstractViewHelper {
    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @param boolean $minified
     * @param string $include
     * @return string
     * @throws \Exception
     */
    public function render($minified = true,$include = 'all') {
        if(!in_array($include,array('all','css','js'))) {
            throw new \Exception('invalid include parameter. valid values are "all", "css" and "js".');
        }

        $return = '';
        if($include == 'css' || $include == 'all') {
            $css = $this->resourceManager->getPublicPackageResourceUri('KSS.Neos.Owlcarousel', 'Styles/owl.carousel.css');
            $return .= '<link rel="stylesheet" type="text/css" href="' . $css . '" />';
        }
        if($include == 'js' || $include == 'all') {
            $js = $this->resourceManager->getPublicPackageResourceUri('KSS.Neos.Owlcarousel', 'JavaScript/owl.carousel' . ($minified ? '.min' : '') . '.js');
            $return .= '<script type="text/javascript" src="' . $js . '"></script>';
        }

        return $return;
    }
}