<?php


     namespace Album\Controller;
     
     use Zend\Mvc\Controller\AbstractActionController;
     use Zend\View\Model\ViewModel;
 
     class IndexController extends AbstractActionController{
         
          public function indexAction() {

              
              $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
              $data = $em->getRepository('Album\Entity\Album')->findAll();
 
              
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'track' => $data , 
                          )
                      );
              return $views;
           }
           
           

    
    public function addAction()
    {
        
        $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
              $sql = "SELECT *
                            FROM watchdog
                            LIMIT 0,5
                            " ; 
              
              $statement = $adapter->createStatement($sql);
              $result = $statement->execute();
              
              
              
              /*
              $adapter = new \Zend\Db\Adapter\Adapter( array(
                    'driver' => 'Pdo',
                    'dsn' => 'mysql:dbname=drupal;hostname=localhost',
                    'username' => 'root',
                    'password' => 'lonelyness',
                    'driver_options' => array(
                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                    ),
                    )) ; 
 
              $isconnected = $adapter->getDriver()->getConnection() ; 
              $value = $isconnected->execute("SELECT *
                            FROM cachetags
                            LIMIT 0 , 30") ; 
  
              foreach ($value as $value){
                  print $value['tag']."<br/>" ; 
              }
               * 
               */
              
              $p1 = new \Helloworld\Model\Person('Nadir Fouka', '47,Rue de la paix - Grenoble', '78500€','PHP Developer') ; 
              $p2 = new \Helloworld\Model\Person('Pierre Anderson', '347,Rue de la paix - Paris', '56600€','Java Developer') ; 
              $p3 = new \Helloworld\Model\Person('Maximus Miridus', '47,albert verdun - Lyon', '69500€','FullStack Developer') ; 
              
              $collection_person = array(
                   'p1' => $p1 , 
                   'p2' => $p2 , 
                   'p3' => $p3 , 
              ) ;            
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'par1' => 'parameters 2' , 
                          'p1'   => $p1->getPerson() , 
                          'all'  => $collection_person , 
                          'res'=> $result , 
                          )
                      );
              return $views;
        
        
    }
    
    public function editAction()
    {
    }
    
    public function deleteAction()
    {
    }
    
    public function rssAction(){
       
        
        $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
              $sql = "SELECT *
                            FROM watchdog
                            LIMIT 0,5
                            " ; 
              
              $statement = $adapter->createStatement($sql);
              $result = $statement->execute();
              
              
              
              /*
              $adapter = new \Zend\Db\Adapter\Adapter( array(
                    'driver' => 'Pdo',
                    'dsn' => 'mysql:dbname=drupal;hostname=localhost',
                    'username' => 'root',
                    'password' => 'lonelyness',
                    'driver_options' => array(
                        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                    ),
                    )) ; 
 
              $isconnected = $adapter->getDriver()->getConnection() ; 
              $value = $isconnected->execute("SELECT *
                            FROM cachetags
                            LIMIT 0 , 30") ; 
  
              foreach ($value as $value){
                  print $value['tag']."<br/>" ; 
              }
               * 
               */
              
              $p1 = new \Helloworld\Model\Person('Nadir Fouka', '47,Rue de la paix - Grenoble', '78500€','PHP Developer') ; 
              $p2 = new \Helloworld\Model\Person('Pierre Anderson', '347,Rue de la paix - Paris', '56600€','Java Developer') ; 
              $p3 = new \Helloworld\Model\Person('Maximus Miridus', '47,albert verdun - Lyon', '69500€','FullStack Developer') ; 
              
              $collection_person = array(
                   'p1' => $p1 , 
                   'p2' => $p2 , 
                   'p3' => $p3 , 
              ) ;            
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'par1' => 'parameters 2' , 
                          'p1'   => $p1->getPerson() , 
                          'all'  => $collection_person , 
                          'res'=> $result , 
                          )
                      );
              return $views;
        
        
    }

      }