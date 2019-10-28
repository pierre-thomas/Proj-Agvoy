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
    
    /**
     * @Route("/room/{id}/like", name = "room_show")
     */
    public function consultRooms(Room $room){
        
        $id = $room->getId();
        
        $likes = $this->get('session')->get('likes');
        
        // si l'identifiant n'est pas présent dans le tableau des likes, l'ajouter
        if (! in_array($id, $likes) )
        {
            $likes[] = $id;
        }
        else
        // sinon, le retirer du tableau
        {
            $likes = array_diff($likes, array($id));
        }
        
        $this->get('session')->set('likes', $likes);
        
        return $this->redirectToRoute('room_index');
    }
}
