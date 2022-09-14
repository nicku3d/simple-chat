<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ChatController
 * @package App\Controller
 * createChat
 * deleteChat
 * addUserToChat
 * kickUserFromChat
 * leaveChat
 * sendMessage
 * unsendMessage
 * receiveMessage
 */
class ChatController extends AbstractController
{
    public function test() {

        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    public function createChat()
    {

    }

    public function leaveChat()
    {

    }

    public function addUsersToChat()
    {

    }

    public function kickUsersFromChat()
    {

    }
}