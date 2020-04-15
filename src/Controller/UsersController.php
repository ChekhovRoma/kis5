<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class UsersController extends AbstractController
{
    public function GetUsers()
    {
        $users = $this->json([
            'users' => [
                [
                    "id" => "111cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name" => "Ivanov Ivan Ivanovich",
                    "birthDate" => "01.01.2000",
                    "subscriptions" => ["JustArt", "Смешные преколы"],
                    "createdTime" => "2020-03-04T17:49:05Z",
                    "updatedTime" => "2020-03-04T17:49:05Z"
                ],
                [
                    "id" => "222cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name" => "Vlad Vladicovic Vlados",
                    "birthDate" => "07.01.1999",
                    "subscriptions" => ["JustArt", "HarryPotterFunClub"],
                    "createdTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
                [
                    "id" => "333cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name" => "Artem Danilovich Gmishenko",
                    "birthDate" => "07.01.1954",
                    "subscriptions" => ["GladValakas", "Durka"],
                    "createdTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
            ]
        ]);
        return $users;
    }

    public function GetUserById($id)
    {
        $user = $this->json([
            'user' => [
                [
                    "id" => $id,
                    "name" => "Vlad Vladicovic Vlados",
                    "birthDate" => "07.01.1999",
                    "subscriptions" => ["JustArt", "HarryPotterFunClub"],
                    "createdTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
            ]
        ]);
        return $user;
    }

    public function PostUser()
    {
        return $this->json(['response' => 'User has been added successfully']);
    }

    public function PutUser($id)
    {
        return $this->json(['response' => 'User with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteUser($id)
    {
        return $this->json(['response' => 'User with id ' . $id . ' has been deleted successfully']);
    }
}