KSS.Owlcarousel v.0.1
===============

TYPO3 Neos Plugin for generating a carousel with the famous "Owl Carousel". Benefits: touch enabled, CSS3 animations, responsive and multiply


1.) Install plugin
2.) Add the following resources to your template:

<script src="{f:uri.resource(package: 'KSS.Owlcarousel', path: 'JavaScript/owl.carousel.min.js')}"></script>
<link rel="stylesheet" href="{f:uri.resource(package: 'KSS.Owlcarousel', path: 'Styles/owl.min.css')}">

3.) Change the owl initialization in the template to your needs: 
KSS.Owlcarousel/Resources/Private/Templates/NodeTypes/Carousel.html

4.) Ready, add some images
