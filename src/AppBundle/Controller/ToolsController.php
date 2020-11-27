<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pimcore\Model\DataObject;
use Pimcore\Model\Asset;

/**
 * 
 */
class ToolsController extends BaseController
{
    /**
     * @Template
     * @Route("/tools", name="tolls_start")
     * @param Request $request
     */
    public function startAction(Request $request)
    {
    }

    /**
     * @Template
     * @Route("/preview/tool/{id}", name="tolls_preview")
     * @param Request $request
     */
    public function previewAction(Request $request, string $id)
    {
        try {
            // Get tool
            $tool = DataObject\Tools::getById($id);
            // Get Image
            $image = Asset::getById($tool->getImage()->getId());

            return $this->render('tools/preview.html.twig', [
                'tool' => $tool,
                'image' => $image,
            ]);
        } catch (\Exception $e) {
            $e->getMessage();
        }
    }
}