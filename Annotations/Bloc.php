<?php
// MyBundle/Annotation/MyAnnotation.php
namespace Hypo\LayoutBundle\Annotations;

/**
 * @Annotation
 */
class Bloc {
	
	public $bloc;
   
	public function __construct(array $data) {
		$this->bloc = $data['value'];
	}	
}