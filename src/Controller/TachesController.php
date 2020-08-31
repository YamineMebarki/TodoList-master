<?php

namespace App\Controller;

use App\Entity\Stains;
use App\Entity\Status;
use App\Entity\Project;
use App\Form\StainsType;
use App\Repository\ProjectRepository;
use App\Repository\StainsRepository;
use App\Repository\StatusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TachesController extends AbstractController
{
private StainsRepository $stainsRepository;
private ProjectRepository $projectRepository;
private StatusRepository $statusRepository;
private EntityManagerInterface $em;
    /**
     * TachesController constructor.
     */
    public function __construct(StainsRepository $stainsRepository, ProjectRepository $projectRepository, StatusRepository $statusRepository, EntityManagerInterface $em)
    {
        $this->stainsRepository = $stainsRepository;
        $this->projectRepository = $projectRepository;
        $this->statusRepository = $statusRepository;
        $this->em = $em;
    }
    /**
     * @Route("/tâches",
     *     name="_taches",
     *     options={"expose": true},
     *     methods={"GET"})
     * @return Response
     */
    public function index():Response{
        $stains = $this->stainsRepository->findAll();
        return $this->render('taches/taches-index.html.twig' , [
            'stains' => $stains,
        ]);
    }
    /**
     * @Route("/taches/{idStains}/edition",
     *     name="_stains_edit",
     *     options={"expose": true},
     *     methods={"GET","POST","PUT"},
     *     requirements={"idStains" : "\d+"})
     * @Entity("stains", expr="repository.findId(idStains)")
     * @param Stains $stains
     * @param Request $request
     * @return Response
     */
    public function edit(Stains $stains,Request $request):Response{
        $statements = $this->statusRepository->findAll();
        $projects = $this->projectRepository->findAll();
        $idStains = $stains->getId() === null ? 0: $stains->getId();
        $stateStains = $stains->getState() === null ? 0: $stains->getState();
        $projectStains = $stains->getProject() === null ? 0: $stains->getProject();
        $form = $this->createForm(StainsType::class, $stains,["action"=>$this->generateUrl("_stains_edit",["idStains"=>$idStains])]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->request->get('state')){
                $state = $request->request->get('state');
                $stains->setState($state);
            }
            if ($request->request->get('project')) {
                $project = $request->request->get('project');
                $stains->setProject($project);
            }
            $stains->setCreatedAt(new \DateTime());
            $project = $this->projectRepository->findOneBy([
                'label' => $request->request->get('project')
            ]);
            $project->setCount($project->getCount()+1);

            $this->em->persist($project);
            $this->em->flush();
            $this->em->persist($stains);
            $this->em->flush();
            return $this->redirectToRoute('_taches');
        }else{
            return $this->render('taches/taches-edit.html.twig', [
                "form"=>$form->createView(),
                'states' => $statements,
                'projects' => $projects,
                'stateStains'=>$stateStains,
                'projectStains'=>$projectStains
            ]);
        }
    }
    /**
     * @Route("/taches/{id}/suppression", name="_taches_remove")
     * @param Stains $stains
     * @return Response
     */
    public function remove(Stains $stains):Response{
        $this->em->remove($stains);
        $project = $this->projectRepository->findOneBy([
            'label' => $stains->getProject()
        ]);
        if ($project->getCount() <= 0 ){
            $project->setCount(0);
        }else {
            $project->setCount($project->getCount() - 1);
        }
        $this->em->persist($project);
        $this->em->flush();
        return $this->redirectToRoute('_taches');
    }
}
