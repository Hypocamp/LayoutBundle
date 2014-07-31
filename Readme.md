Hypo layout
===========

The goal is to have very ligth overhead but usefull function. To acomplish that, just twig is in the scope, and function and bundle contains just files needed.

Actually the purposes are:

 - Give a layout engine which decorate all pages
 - css and js centralisation for twig with the function addcss and addjs

Installation
------------

 - add to composer 
 - add this lines to app/AppKernel.php
 
```php
	new Hypo\LayoutBundle\HypoLayoutBundle(),
```

 - configure the bundle in config.yml (a default configuration can be find in LayoutBundle/Resources/config/defaultconfiguration.yml)


Use
---

### Layout management ###

The annotations @Layout and @TwigVar are available to provide a rewrite of the resulting templates. The process works at the end of symfony request if :

- the code is 200
- the request is not an XHTTP request

To provide a layout for a method use the annotation @Layout : 

@\Hypo\LayoutBundle\Annotation\Layout("template name")


### Dynamic assets management ###

Even if many assets could be use as static file always provide to the client, it could be usefull to have library (like rich editor by example) loaded just for a few pages. This is the purpose of those 4 twig functions or filters :

 - addcss
 - addjs
 - getcss
 - getjs