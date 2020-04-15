<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class CommunitiesController extends AbstractController
{
    public function GetCommunities()
    {
        $communities = $this->json([
            'communities' => [
                [
                    "id" => "111cf35x-2c4y-483z-a0a9-158621f77a21",
                    "administratorId" => "311cf35x-2c4y-483z-a0a9-158621f77a21",
                    "communityName" => "JustAtr",
                    "communityDescription" => "Art and inspiration.",
                    "tags" => ["art", "inspiration"],
                    "communityMembers" => ["111cf35x-2c4y-483z-a0a9-158621f77a21", "121cf35x-2c4y-483z-a0a9-158621f77a21"],
                    "createdTime" => "2020-03-04T17:49:05Z",
                    "updatedTime" => "2020-03-04T17:49:05Z"
                ],
                [
                    "id" => "111cf35x-2c4y-483z-a0a9-158621f77a21",
                    "administratorId" => "311cf35x-2c4y-483z-a0a9-158621f77a21",
                    "communityName" => "JustNeroFunClub",
                    "communityDescription" => "podlizalsya, ya shershavii yazichek.(Nero iz DMC???)",
                    "tags" => ["nero", "Devil May Cry"],
                    "communityMembers" => ["111cf35x-2c4y-483z-a0a9-158621f77a21", "121cf35x-2c4y-483z-a0a9-158621f77a21"],
                    "createdTime" => "2020-03-04T17:49:05Z",
                    "updatedTime" => "2020-03-04T17:49:05Z"
                ]
            ]
        ]);
        return $communities;
    }

    public function GetCommunity($id)
    {
        $community = $this->json([
            'community' => [
                [
                    "id" => "111cf35x-2c4y-483z-a0a9-158621f77a21",
                    "administratorId" => "311cf35x-2c4y-483z-a0a9-158621f77a21",
                    "communityName" => "JustAtr",
                    "communityDescription" => "Art and inspiration.",
                    "tags" => ["art", "inspiration"],
                    "communityMembers" => ["111cf35x-2c4y-483z-a0a9-158621f77a21", "121cf35x-2c4y-483z-a0a9-158621f77a21"],
                    "createdTime" => "2020-03-04T17:49:05Z",
                    "updatedTime" => "2020-03-04T17:49:05Z"
                ],
            ]
        ]);
        return $community;
    }

    public function PostCommunity()
    {
        return $this->json(['response' => 'Community has been added successfully']);
    }

    public function PutCommunity($id)
    {
        return $this->json(['response' => 'Community with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteCommunity($id)
    {
        return $this->json(['response' => 'Community with id ' . $id . ' has been deleted successfully']);
    }
}