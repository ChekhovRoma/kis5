<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CommentsController extends AbstractController
{
    public function GetComments($postID)
    {
        $comments = $this->json([
            'comments' => [
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'postID' => $postID,
                    'authorId' => '666cf35x-2c4y-000z-a111-153331f77a21',
                    'commentText' => 'Mem smeshnoi a situaciya strshnaya',
                    'likes' => 300,
                    "postedTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
                [
                    'id' => '1244435x-2c4y-483z-a0a9-158621f77a21',
                    'postID' => $postID,
                    'authorId' => '777cf35x-2c4y-000z-a111-153331f77a21',
                    'commentText' => 'Mem ne smeshnoi a situaciya ne strshnaya',
                    'likes' => 100,
                    "postedTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
                [
                    'id' => '1299935x-2c4y-483z-a0a9-158621f77a21',
                    'postID' => $postID,
                    'authorId' => '999cf35x-2c4y-000z-a111-153331f77a21',
                    'commentText' => 'like esli lubish mamu',
                    'likes' => 500,
                    "postedTime" => "2020-05-04T17:49:05Z",
                    "updatedTime" => "2020-05-04T17:49:05Z"
                ],
            ]
        ]);
        return $comments;
    }

    public function CreateComment($postID)
    {
        return $this->json(['response' => 'Comment under post: ' . $postID . ' has been created successfully']);
    }

    public function GetComment($id)
    {
        $comment = $this->json([
            'comment' => [
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'postID' => $id,
                    'authorId' => '666cf35x-2c4y-000z-a111-153331f77a21',
                    'commentText' => 'Mem smeshnoi a situaciya strshnaya',
                    'likes' => 300,
                    "postedTime" => "2020-04-04T17:49:05Z",
                    "updatedTime" => "2020-04-04T17:49:05Z"
                ],
            ]
        ]);
        return $comment;
    }

    public function PutComment($id)
    {
        return $this->json(['response' => 'Comment with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteComment($id)
    {
        return $this->json(['response' => 'Comment with id ' . $id . ' has been deleted successfully']);
    }
}
