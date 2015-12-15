<?php
namespace KSS\Neos\Owlcarousel\ViewHelpers;

use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

class IncludeViewHelper extends AbstractViewHelper {
    /**
     * @param boolean $minified
     * @return string
     */
    public function render($minified = true) {
        return '
            <link rel="stylesheet" type="text/css" href="resource://KSS.Neos.Owlcarousel/Public/Styles/owl.carousel.css" />
            <script type="text/javascript" src="resource://KSS.Neos.Owlcarousel/Public/JavaScript/owl.carousel' . ($minified ? '.min' : '') . '.js"></script>
        ';
    }
}