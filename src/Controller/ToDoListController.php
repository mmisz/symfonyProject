<?php
/**
 * ToDoList controller.
 */

namespace App\Controller;

use App\Entity\ToDoList;
use App\Repository\ToDoListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\ListCommentType;
use App\Repository\ListCommentRepository;
use App\Entity\ListComment;
use App\Form\ToDoListType;
/**
 * Class ToDoList.
 *
 * @Route("/to-do")
 */
class ToDoListController extends AbstractController
{
    /**
     * Index action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request        HTTP request
     * @param \App\Repository\ToDoListRepository            $toDoList ToDoList repository
     * @param \Knp\Component\Pager\PaginatorInterface   $paginator      Paginator
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     name="to_do_index",
     * )
     */
    public function index(Request $request, ToDoListRepository $toDoList, PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $toDoList->queryAll(),
            $request->query->getInt('page', 1),
            ToDoListRepository::PAGINATOR_ITEMS_PER_PAGE
        );

        return $this->render(
            'to-do/index.html.twig',
            ['pagination' => $pagination]
        );
    }

    /**
 * Show action.
 *
 * @param \App\Entity\ToDoList $toDoList ToDoList entity
 *
 * @return \Symfony\Component\HttpFoundation\Response HTTP response
 *
 * @Route(
 *     "/{id}",
 *     methods={"GET", "POST"},
 *     name="to_do_show",
 *     requirements={"id": "[1-9]\d*"},
 * )
 */
    public function show(ToDoList $toDoList, Request $request, ListCommentRepository $listCommentRepository): Response
    {
        $listComment = new ListComment();
        $form = $this->createForm(ListCommentType::class, $listComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'message_created_successfully');
            $toDoList->addComment($listComment);
            $listCommentRepository->save($listComment);
        }

        return $this->render(
            'to-do/show.html.twig',
            ['form' => $form->createView(),
                'toDoList' => $toDoList]
        );
    }
    /**
     * Edit action.
     *
     * @param \App\Entity\ToDoList $toDoList ToDoList entity
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/edit-{id}",
     *     methods={"GET", "POST"},
     *     name="to_do_edit",
     *     requirements={"id": "[1-9]\d*"},
     * )
     */
    public function edit(ToDoList $toDoList, Request $request, ToDoListRepository $toDoListRepository): Response
    {
        $formTitle = $this->createForm(ToDoListType::class, $toDoList);
        $formTitle->handleRequest($request);

        if ($formTitle->isSubmitted() && $formTitle->isValid()) {
            $this->addFlash('success', 'message_updated_successfully');
            $toDoListRepository->save($toDoList);
        }
        return $this->render(
            'to-do/edit.html.twig',
            ['formTitle' => $formTitle->createView(),
                'toDoList' => $toDoList]
        );
    }
    /**
     * editComment action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP request
     * @param \App\Repository\ListComment $listComment
     * @param \App\Repository\ListCommentRepository $listCommentRepository
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @Route(
     *     "/list-comment-edit/{id}",
     *     methods={"GET", "PUT"},
     *     requirements={"id": "[1-9]\d*"},
     *     name="list_comment_edit",
     * )
     */
    public function editComment(Request $request, ListComment $listComment, ListCommentRepository $listCommentRepository): Response
    {
        $form = $this->createForm(ListCommentType::class, $listComment, ['method' => 'PUT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $listCommentRepository->save($listComment);

            $this->addFlash('success', 'message_updated_successfully');
            $toDoList = $listComment->getToDoList();
            return $this->redirectToRoute('to_do_show',['id'=>$toDoList->getId()]);
        }

        return $this->render(
            'to-do/editComment.html.twig',
            [
                'form' => $form->createView(),
                'listComment' => $listComment,
                'listId' => $listComment->getToDoList()->getId(),
            ]
        );
    }
    /**
     * deleteComment action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request            HTTP request
     * @param \App\Repository\ListComment $listComment
     * @param \App\Repository\ListCommentRepository $listCommentRepository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @Route(
     *     "/list-comment-delete/{id}",
     *     methods={"GET", "DELETE"},
     *     requirements={"id": "[1-9]\d*"},
     *     name="list_comment_delete",
     * )
     */
    public function deleteComment(Request $request, ListComment $listComment, ListCommentRepository $listCommentRepository): Response
    {
        $form = $this->createForm(ListCommentType::class, $listComment, ['method' => 'DELETE']);
        $form->handleRequest($request);

        if (!$form->isSubmitted() && $request->isMethod('DELETE')) {
            $form->submit($request->request->get($form->getName()));
        }
        if($form->isSubmitted() && $form->isValid()){
            $this->addFlash('success', 'message_deleted_successfully');
            $listCommentRepository->delete($listComment);
            $toDoList = $listComment->getToDoList();
            return $this->redirectToRoute('to_do_show',['id'=>$toDoList->getId()]);
        }



        return $this->render(
            'to-do/deleteComment.html.twig',
            [
                'form' => $form->createView(),
                'listComment' => $listComment,
                'listId' => $listComment->getToDoList()->getId(),
            ]
        );
    }
}
