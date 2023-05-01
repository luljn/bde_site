<?php

    require_once("src/controllers/Inscription.php");
    require_once("src/controllers/Connection.php");
    require_once("src/controllers/Homepage.php");
    require_once("src/controllers/AdminConnection.php");
    require_once("src/controllers/Welcomepage.php");
    require_once("src/controllers/About.php");
    require_once("src/controllers/Contact.php");
    require_once("src/controllers/Events.php");
    require_once("src/controllers/LegalTerms.php");
    require_once("src/controllers/IdeaBox.php");
    require_once("src/controllers/Shop.php");

    use src\controllers\Inscription\InscriptionController;
    use src\controllers\Connection\ConnectionController;
    use src\controllers\Homepage\HomepageController;
    use src\controllers\Connection\AdminConnectionController;
    use src\controllers\Welcomepage\WelcomepageController;
    use src\controllers\About\AboutController;
    use src\controllers\Contact\ContactController;
    use src\controllers\Events\EventsController;
    use src\controllers\LegalTerms\LegalTermsController;
    use src\controllers\IdeaBox\IdeaBoxController;
    use src\controllers\Shop\ShopController;

    /* 
        We call the right controller by the value 
        of the parameter 'action' in the url. 
    */
    try{       

        if(isset($_GET['action']) && $_GET['action'] !== ''){

            if($_GET['action'] === 'inscription'){

                (new InscriptionController)->start();
            }

            elseif($_GET['action'] === 'adminConnection'){

                (new AdminConnectionController)->execute();
            }

            elseif($_GET['action'] === 'accueil'){

               (new WelcomepageController)->sayWelcome();
            }

            elseif($_GET['action'] === 'about'){

                (new AboutController)->display();
            }

            elseif($_GET['action'] === 'events'){

                (new EventsController)->present();
            }

            elseif($_GET['action'] === 'contact'){

                (new ContactController)->show();
            }

            elseif($_GET['action'] === 'idea-box'){

                (new IdeaBoxController)->show();
            }

            elseif($_GET['action'] === 'legal'){

                (new LegalTermsController)->displayLegal();
            }

            elseif($_GET['action'] === 'boutique'){

                (new ShopController)->shooping();
            }
            /*
            elseif($_GET['action'] === 'homepage' && isset($_POST['email']) && isset($_POST['password'])){

                (new HomepageController)->welcome();
            }*/
            
            elseif($_GET['action'] === 'inscriptionError'){

                $errorMessage = "Vous ne pouvez pas vous inscrire sur ce site !!!<br>
                                 L'adresse email que vous avez fournie est deja liee a un compte !!!<br>
                                 <a href = 'http://localhost:4000/index.php'>Login Page</a>";

                require_once('templates/error.php');
            }

            elseif($_GET['action'] === 'homepageError'){

                $errorMessage = "Adresse email ou mot de passe incorrect !!!<br>
                                 <a href = 'http://localhost:4000/index.php'>Login Page</a>";

                require_once('templates/error.php');
            }
            /*
            elseif(isset($_GET['action']) && $_GET['action'] !== '' && isset($_POST['email']) && isset($_POST['password'])){

                if($_GET['action'] === 'homepage'){

                    (new HomepageController)->welcome();
                }
            }
            */
            else{

                throw new Exception('La page que vous recherchez n\'existe pas !!!');
            }
        }

        else{

            (new ConnectionController)->execute();
        }
    }

    // Error gestion.
    catch(Exception $e){

        $errorMessage = $e->getMessage();
        require_once("templates/error.php");
    }
    