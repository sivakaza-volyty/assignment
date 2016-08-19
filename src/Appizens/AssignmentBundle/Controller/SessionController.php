<?php

namespace Appizens\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Appizens\AssignmentBundle\Entity\User;
use Appizens\AssignmentBundle\Entity\Session;

class SessionController extends Controller
{

    /**
     * Description: overview of the sessions and the specialists and the anesthetists that are scheduled per OR.
     * @return: arrayCollection
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();

        $sessions = $em->getRepository('AssignmentBundle:Session')->findAll();

        if(null !== $sessions) {

            //Format the result
            $output = array();
            foreach ($sessions as $session) {
                $output[$session->getid()]['start_at'] = $session->getStartAt();
                $output[$session->getid()]['end_at'] = $session->getEndAt();
                $output[$session->getid()]['operating_room'] = $session->getOperationTheater()->getName();

                if (null !== $session->getUsers()) {
                    $i = 0;
                    foreach ($session->getUsers() as $user) {
                        if ($user->hasGroup("Specialist")) {
                            $i++;
                            $output[$session->getid()]['specialist'][$i] = $user->getName();
                        } else {
                            $output[$session->getid()]['anesthetists'] = $user->getName();
                        }
                    }
                }
            }
            return new JsonResponse(array(
                'success' => true,
                'sessions' => $output,
            ));

        }else{
            return new JsonResponse(array(
                'success' => false,
                'message' => 'NO records found',
            ));
        }
    }


    /**
     * Description: overview of the sessions and OR’s of a specific specialist.
     * @param specialist_id
     */
    public function getSpecialistSessionsAction(Request $request){

        $user = $request->get('specialist_id');
        $em = $this->getDoctrine()->getManager();

        $sessionRepo = $em->getRepository('AssignmentBundle:Session');

        $specialistSessions = $sessionRepo->createQueryBuilder('s')
                                          ->select('DISTINCT s.id')
                                          ->leftJoin('s.users', 'su', 'with', 'su.id=:user')
                                          ->setParameter('user', $user)
                                          ->getQuery()
                                          ->getResult();
        if(null !== $specialistSessions){
            //Format Results
            $output = array();
            foreach($specialistSessions as $specialistSession){
                $output[$specialistSession->getid()]['start_at'] = $specialistSession->getStartAt();
                $output[$specialistSession->getid()]['end_at'] = $specialistSession->getEndAt();
                $output[$specialistSession->getid()]['operating_room'] = $specialistSession->getOperationTheater()->getName();
            }
            return new JsonResponse(array(
                'success' => true,
                'specialist_sessions' => $output,
            ));
        }else{
            return new JsonResponse(array(
                'success' => false,
                'message' => 'NO records found',
            ));
        }

    }

    /**
     * Description: checks if a specialists available in a certain timeslot.
     * @return : boolean
     */
    public function searchSpecialistAction(Request $request){
        $user = $request->get('specialist_id');
        $start = $request->get('time_slot_start');
        $end = $request->get('time_slot_end');
        $em = $this->getDoctrine()->getManager();

        $sessionRepo = $em->getRepository('AssignmentBundle:Session');

        $specialistSessions = $sessionRepo->createQueryBuilder('s')
            ->select('DISTINCT s.id')
            ->leftJoin('s.users', 'su', 'with', 'su.id=:user')
            ->setParameter('user', $user)
            ->andWhere('s.startAt<=:start')
            ->andWhere('s.EndAt<=:end')
            ->setParameter('start',$start)
            ->setParameter('end',$end)
            ->getQuery()
            ->getResult();

        if(null !== $specialistSessions)
            return true;
        else
            return false;
    }

}
