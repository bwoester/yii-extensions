<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
  
  /**
   * Returns the request parameters that will be used for action parameter binding.
   * By default, this method will return $_GET. You may override this method if you
   * want to use other request parameters (e.g. $_GET+$_POST).
   * @return array the request parameters to be used for action parameter binding
   * @since 1.1.7
   */
  public function getActionParams()
  {
//    $event = new CEvent( $this, array() );
//    $this->onGetActionParams( $event );
//    return isset($event->params['actionParams'])
//      ? $event->params['actionParams']
//      : parent::getActionParams();
    return array_merge( $_POST, $_GET );
  }
  
  public function onGetActionParams( $event )
  {
    $this->raiseEvent( 'onGetActionParams', $event );
  }
}