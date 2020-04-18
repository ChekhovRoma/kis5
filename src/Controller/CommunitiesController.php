<?php


namespace App\Controller;

use App\Entity\Community;
use App\Entity\Post;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    public function PostCommunity(Request $request):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $community = new Community();

        $community->setName($request->request->get('communityName'));
        $community->setDescription($request->request->get('communityDescription'));
        $community->setTags([$request->request->get('tags')]);
        $admin = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($request->request->get('adminId'));
        $community->setAdminId($admin);
        $community->setCreatedTime(new \DateTime('now'));
        $community->setUpdatedTime(new \DateTime('now'));


        $entityManager->persist($community);
        $entityManager->flush();

        return new Response('Saved User with id '.$community->getName());
    }

    public function PutCommunity($id, Request $request):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $community = $entityManager->getRepository(Community::class)->find($id);
        $isExist = true;
        if (!$community) {
            $community = new Community();
            $isExist = false;
        }

        $community->setName($request->request->get('communityName'));
        $community->setDescription($request->request->get('communityDescription'));
        $community->setTags([$request->request->get('tags')]);
        $admin = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($request->request->get('adminId'));
        $community->setAdminId($admin);
        $community->setCreatedTime(new \DateTime('now'));
        $community->setUpdatedTime(new \DateTime('now'));


        $entityManager->persist($community);
        $entityManager->flush();

        if ($isExist) return new Response('Edited new community '. $community->getName());
        return new Response('Existed new community '.$community->getName());

    }

    public function DeleteCommunity($id):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $community = $entityManager->getRepository(Community::class)->find($id);
        if (!$community) return new Response('Сообщества с таким id нет :(');
        $entityManager->remove($community);
        $entityManager->flush();
        return new Response('Сообщество c индентификатором '.$id.' было уничтожено и стерто!');
    }

    public function index(){
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();
        return $this->render('community.html.twig', ['users'=>$users]);
    }
}