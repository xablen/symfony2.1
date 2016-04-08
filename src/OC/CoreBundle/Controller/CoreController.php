<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
  // La page d'accueil
  public function indexAction()
  {
    // On retourne simplement la vue de la page d'accueil
    // L'affichage des 3 dernières annonces utilisera le contrôleur déjà existant dans PlatformBundle
    return $this->get('templating')->renderResponse('OCCoreBundle:Core:index.html.twig');

    // La méthode raccourcie $this->render('...') est parfaitement valable
  }

  // La page de contact
  public function contactAction(Request $request)
  {
    $session = $request->getSession();
    $session->getFlashBag()->add('info', 'La page de contact n’est pas encore disponible, merci de revenir plus tard.');
    return new RedirectResponse($this->get('router')->generate('oc_core_home'));
  }
}
