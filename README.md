<h1>Generate entities ORM </h1>
./vendor/doctrine/doctrine-module/bin/doctrine-module orconvert-mapping --namespace="Album\\Entity\\" --force  --from-database annotation ./module/Album/src/  
<br/>
./vendor/doctrine/doctrine-module/bin/doctrine-module orgenerate-entities ./module/Album/src/ --generate-annotations=true

in your controller : 

              $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
              $data = $em->getRepository('Album\Entity\Album')->findAll();
 
              
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'track' => $data , 
                          )
                      );
              return $views;
<
<br/>
<h2>template  : </h2>


         foreach ($this->track as $track ) { 
                print '<tr>' ; 
                print '<td>'.$track->getId().'</td>' ; 
                print '<td>'.$track->getArtist().'</td>' ; 
                print '<td>'.$track->getTitle().'</td>' ; 
                print '</tr>' ; 
        }
    
            

