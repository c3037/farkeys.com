<?php
/**
* @author Dmitry Porozhnyakov
*/
class Controller
{
    public function __construct()
    {
        $main = new Main( '/contacts' );
        
        /*if( isset( $_POST['query'] ) and !empty( $_POST['query'] ) )
        {
            require_once( VIEW.'/'.SystemData::$folder.'/messages.php' );
            require_once( VIEW.'/'.SystemData::$folder.'/notices.php' );
        }*/
        
        $data = $this->model();
        $this->view( $data );
    }
    public function model()
    {
        require_once( MODL.'/m_contacts.php' );
        $model = new Model();
        return $model->printdata();
    }
    public function view( $data )
    {
        require_once( VIEW.'/'.SystemData::$folder.'/v_contacts.php' );
    }
}
?>