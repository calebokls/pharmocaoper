<?php

namespace App\Controller;

use App\Data\SeachData;
use App\Data\SeacheData;
use App\Entity\Contact;
use App\Entity\Products;
use App\Form\ProductsType;
use App\Form\SeachForm;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product')]
    public function index(ProductsRepository $prodRepo,PaginatorInterface $paginator,Request $req): Response
    {
        $seach = new SeachData;
        $form = $this->createForm(SeachForm::class,$seach);
        $form->handleRequest($req);
        
       
        $produits = $paginator->paginate(
            $prodRepo->findSeach($seach),
            $req->query->getInt('page', 1),
            8
        );
        return $this->render('product/index.html.twig', [
            'produits' => $produits,
            'form'=>$form->createView()
        ]);
    }

    
    #[Route('/product/ajouter', name: 'app_product_ajouter')]
    public function Ajouter(Request $req,EntityManagerInterface $em): Response
    {
        if(!$this->getUser())
        {
            return $this->redirectToRoute('app_product');
        }
        $product = new Products();
         $form = $this->createForm(ProductsType::class,$product);
        $form->handleRequest($req);
       
        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($product);
            $em->flush();
            $this->addFlash('success','Produit ajouter avec succces');
            return $this->redirectToRoute('app_product_all');
        }

        return $this->render('product/ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    #[Route('/product/{id}', name: 'app_product_show')]
    public function Show(Products $product): Response
    {
        return $this->render('product/show.html.twig',[
            'product'=>$product
        ]);
    }

    
    #[Route('/product/{id}/edit', name: 'app_product_edit')]
    public function edit(Products $product,Request $req,EntityManagerInterface $em): Response
    {
        if(!$this->getUser())
        {
            return $this->redirectToRoute('app_product');
        }
        $form = $this->createForm(ProductsType::class,$product);
        $form->handleRequest($req);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            $this->addFlash('success', 'Modification effetuée avec succès');
            return $this->redirectToRoute('app_product_all');
        }
        return $this->render('product/edit.html.twig',[
            'product'=>$product,
            'form'=>$form->createView()
        ]);
    }

    #[Route('/all', name: 'app_product_all')]
    public function all(ProductsRepository $prodRepo,PaginatorInterface $paginator,Request $req): Response
    {
        if(!$this->getUser())
        {
            return $this->redirectToRoute('app_product');
        }
        $produits = $paginator->paginate(
            $prodRepo->FindPagination(),
            $req->query->getInt('page', 1),
            12
        );
        return $this->render('admin/index.html.twig', [
            'produits' => $produits
        ]);
    }

    #[Route('/product/{id}/delete', name: 'app_product_delete')]
    public function delete(Request $req,Products $produit,EntityManagerInterface $em):RedirectResponse 
    {
        if(!$this->getUser())
        {
            return $this->redirectToRoute('app_product');
        }
        if($this->isCsrfTokenValid('product_deletion_'.$produit->getId(), $req->request->get('csrf_token')))
        {
            $em->remove($produit); 
            $em->flush();
            $this->addFlash('info', 'Produit supprimer avec succès');
            return $this->redirectToRoute('app_product_all');
        }
       
        return $this->redirectToRoute('app_product_all');
    }

    
}
