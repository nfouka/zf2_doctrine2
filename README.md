<h1>Generate entities ORM with ZF2 AND Doctrine II  </h1>
<img src='https://raw.githubusercontent.com/zendframework/zf2/234b554f2ca202095aea32e4fa557553f8849664/resources/ZendFramework-logo.png' />
add doctrine/doctrine-orm-module with 

             composer require doctrine/doctrine-orm-module

<hr/>
Générate entities with annotation : 

    ./vendor/doctrine/doctrine-module/bin/doctrine-module orconvert-mapping --namespace="Album\\Entity\\" --force  --from-database annotation ./module/Album/src/  
<br/>

    ./vendor/doctrine/doctrine-module/bin/doctrine-module orgenerate-entities ./module/Album/src/ --generate-annotations=true
<hr/>
<h2>Controller </h2> 

              $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
              $data = $em->getRepository('Album\Entity\Album')->findAll();
 
              
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'track' => $data , 
                          )
                      );
              return $views;

<hr/>
<h2>template  </h2>


         foreach ($this->track as $track ) { 
                print '<tr>' ; 
                print '<td>'.$track->getId().'</td>' ; 
                print '<td>'.$track->getArtist().'</td>' ; 
                print '<td>'.$track->getTitle().'</td>' ; 
                print '</tr>' ; 
        }
    
            

Open your navigateur to 
  
    http://127.0.0.1:3333/album
