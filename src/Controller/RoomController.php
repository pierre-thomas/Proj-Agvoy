<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Room;

class RoomController extends AbstractController
{
    /**
     * @Route("/room", name="room")
     */
    public function index()
    {
        return $this->render('room/index.html.twig', [
            'controller_name' => 'RoomController',
        ]);
    }
    
    /**
     * @Route("/room/list", name="room_index")
     */
    public function list(){
       
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository(Room::class)->findAll();
        
       return $this->render('room/list.html.twig', [
           'rooms' => $rooms,
       ]);
    }
    /**
     * @Route("/room/new", name = "room_new")
     */
    public function new(){
        return $this->render('room/new.html.twig');
    }
    
    /**
    * @Route("/room/{id}", name = "room_show")
    */
    public function show(Room $room){
        return $this->render('room/show.html.twig',['room'=>$room]);
    }
}
