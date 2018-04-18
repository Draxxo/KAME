<?php

/*****************************
 * Fabrice & Pierre, bisous ! *
 *****************************/


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatsController extends Controller
{
    /**
     * @Route("/stats", name="stats")
     */

    public function index()
    {
        return $this->render('stats/index.html.twig', [
            'controller_name' => 'StatsController',
        ]);
    }

    /**
     * @Route("/statistiques/dashboard", name="dashboard")
     */

    public function getDashboardDatas()
    {
        return $this->render('stats/dashboard.html.twig', [
            'controller_name' => 'DashboardController',

        ]);

        /* REQUETES */

        //nb Eleve global
        $eleveTotal = $db->select("SELECT * FROM users JOIN roles ON users.roleId = roles.roleId WHERE roleName='eleve'");
        //nb Eleve en cours
        $eleveActif = $db->select("SELECT * FROM users JOIN usergroups ON users.userId = usergroups.Users_userId
                                      JOIN groups ON usergroups.Groups_groupId = groups.groupId
                                      JOIN promotions ON groups.idPromotion = promotions.idPromotion WHERE promotionIsActive=true");
        //nb user
        $nbUser = $db->select("SELECT * FROM users");
        //nb ticket
        $nbTicket = $db->select("SELECT * FROM tickets");
        //nb reservation
        $nbReservation = $db->select("SELECT * FROM zonesreservations");
        //nb intervenant
        $nbIntervenant = $db->select("SELECT * FROM users JOIN roles ON users.roleId = roles.roleId WHERE roleName='intervenant'");
        //mobilier fixe
        $nbMobileFixe = $db->select("SELECT * FROM furnitures");
        //mobilier mobile
        $nbMobilierMobile = $db->select("SELECT * FROM equipments");

        //Valeur d'initialisation en attendant les fausses données de test
        $eleveTotal = 180;
        $eleveActif = 60;
        $nbUser = 220;
        $nbTicket = 5;
        $nbReservation = 580;
        $nbIntervenant = 30;
        $nbMobileFixe = 100;
        $nbMobilierMobile = 20;

    }

    /**
     * @Route("/statistiques/planning", name="planning")
     */

    public function getPlanningDatas()
    {
        return $this->render('stats/planning.html.twig', [
            'controller_name' => 'PlanningController',

        ]);

    }

    /**
     * @Route("/statistiques/promotions", name="promotions")
     */

    public function getPromotionsDatas()
    {
        return $this->render('stats/promotions.html.twig', [
            'controller_name' => 'PromotionsController',

        ]);

    }

    /**
     * @Route("/statistiques/microWave", name="MicroWave")
     */

    public function getMicroWaveDatas()
    {
        return $this->render('stats/microWave.html.twig', [
            'controller_name' => 'MicroWaveController',

        ]);

    }



}
