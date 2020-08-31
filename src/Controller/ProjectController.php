<?php


namespace App\Controller;


use App\Entity\Project;
use App\Entity\Stains;
use App\Entity\Status;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use App\Repository\StainsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
private ProjectRepository $projectRepository;
private StainsRepository $stainsRepository;
private EntityManagerInterface $em;
    /**
     * ProjectController constructor.
     */
    public function __construct(ProjectRepository $projectRepository, StainsRepository $stainsRepository,EntityManagerInterface $em)
    {
        $this->projectRepository = $projectRepository;
        $this->stainsRepository = $stainsRepository;
        $this->em = $em;
    }
    /**
     * @Route("/projets",
     *     name="_projects",
     *     options={"expose": true},
     *     methods={"GET"})
     * @return Response
     */
    public function index():Response{
        $stains = $this->stainsRepository->findAll();;
        $projects = $this->projectRepository->findAll();
        return $this->render('project/project-index.html.twig', [
            "projects"=>$projects,
        ]);
    }
    /**
     * @Route("/projet/{idProject}/edition",
     *     name="_project_edit",
     *     options={"expose": true},
     *     methods={"GET","POST","PUT"},
     *     requirements={"idProject" : "\d+"})
     * @Entity("project", expr="repository.findId(idProject)")
     * @param Project $project
     * @param Request $request
     * @return Response
     */
    public function edit(Project $project,Request $request):Response{
        $idProject = $project->getId() === null ? 0: $project->getId();
        $form = $this->createForm(ProjectType::class, $project,["action"=>$this->generateUrl("_project_edit",["idProject"=>$idProject])]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($project);
            $this->em->flush();
            return $this->redirectToRoute('_projects');
        }else{
            return $this->render('project/project-edit.html.twig', ["form"=>$form->createView()]);
        }
    }
    /**
     * @Route("/projet/{idProject}/suppression",
     *     name="_project_remove",
     *     options={"expose": true},
     *     methods={"DELETE"},
     *     requirements={"idProject" : "\d+"})
     * @Entity("project", expr="repository.findId(idProject)")
     * @param Project $project
     * @return JsonResponse
     */
    public function remove(Project $project):JsonResponse{
        $this->em->remove($project);
        $this->em->flush();
        return $this->json(true);
    }

    /**
     * @Route("/projet/{id}/suppression", name="remove")
     * @return Response
     */
    public function removeProjectStains(Project $project):Response{
        if ($project->getCount() > 0 ) {
            $stains = $this->stainsRepository->findBy(array("project" => $project->getLabel()));
            foreach ($stains as $stains) {
                $this->em->remove($stains);
            }
        }
        $this->em->remove($project);
        $this->em->flush();
        return $this->redirectToRoute('_projects');
    }
}